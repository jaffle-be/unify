<?php namespace Themes\Unify;

use App\Account\Client;
use App\Blog\Post;
use App\Blog\PostTranslation;
use App\System\ServiceProvider;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class UnifyServiceProvider extends ServiceProvider
{

    protected $namespace = 'Unify';

    public function boot()
    {
        parent::boot();

        $this->viewComposers();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->breadcrumbs();
    }

    protected function observers()
    {
    }

    protected function listeners()
    {
    }

    protected function viewComposers()
    {
        /** @var Factory $view */
        $this->app['view']->composer('Unify::layout.footers.*', function (View $view) {
            $cache = app('cache')->driver();

            $posts = $cache->sear('footer-posts', function () {

                $translations = PostTranslation::lastPublished()->take(3)->lists('post_id');

                if ($translations->count() == 0) {
                    return new Collection();
                }

                $posts = Post::with(['translations', 'images', 'images.sizes'])
                    ->whereIn('id', $translations->toArray())
                    ->get();

                return $posts->sortBy('publish_at')->reverse();
            });

            $view->with('posts', $posts);
        });

        $this->app['view']->composer('Unify::layout.widgets.clients', function (View $view) {

            $clients = app('cache')->sear('widget-clients', function () {

                return Client::has('images', '>', 0)
                    ->take(30)
                    ->get();
            });

            if ($clients->count()) {
                $amount = $clients->count() > 10 ? 10 : $clients->count();

                $clients = $clients->shuffle()->random($amount);
            }

            $view->with('clients', $clients);
        });
    }

    protected function breadcrumbs()
    {
        $this->app->extend('breadcrumbs', function ($breadcrumbs) {

            $view = 'Unify::layout.breadcrumbs.' . $this->app['theme']->setting('layoutBreadcrumbs');

            $breadcrumbs->setView($view);

            return $breadcrumbs;
        });
    }

}