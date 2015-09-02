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

        $this->app->booted(function()
        {
            $this->viewComposers();
        });

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

            $posts = app('cache')->sear('footer-posts:' . app()->getLocale(), function () {

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

        $this->app['view']->composer('Unify::blog.elements.sidebars.*', function(View $view)
        {
            //latest posts ?
            $posts = app('App\Blog\PostRepositoryInterface');

            $latest = $posts->getLatestPosts(3);

            //all tags
            $tags = \App\Tags\Tag::has('posts')->limit(15)->get();

            $view->with(['latest' => $latest, 'tags' => $tags]);
        });

        $this->app['view']->composer('Unify::layout.widgets.recent-posts', function(View $view){
            $posts = app('App\Blog\PostRepositoryInterface');

            $latest = $posts->getLatestPosts(3);

            $view->with(['latest' => $latest]);
        });

        $this->app['view']->composer('Unify::layout.widgets.portfolio-examples', function(View $view)
        {
            $projects = app('App\Portfolio\PortfolioRepositoryInterface');

            $projects = $projects->getExamples(4);

            $view->with(['projects' => $projects]);
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