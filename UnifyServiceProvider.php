<?php namespace Themes\Unify;

use App\Account\Client;
use App\Blog\Post;
use App\Blog\PostTranslation;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Jaffle\Tools\ServiceProvider;

class UnifyServiceProvider extends ServiceProvider
{

    protected $namespace = 'Unify';

    public function boot()
    {
        $view = 'Unify::layout.breadcrumbs.' . $this->app['theme']->setting('breadcrumbs');

        $this->app['config']->set('breadcrumbs.view', $view);

        parent::boot();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    protected function observers()
    {
    }

    protected function listeners()
    {
        /** @var Factory $view */
        $this->app['view']->composer('Unify::layout.footers.*', function(View $view)
        {
            $translations = PostTranslation::lastPublished()->take(3)->lists('post_id');

            if($translations->count() == 0)
            {
                $view->with('posts', []);

                return;
            }

            $posts = Post::with(['translations', 'images'])
                ->whereIn('id', $translations->toArray())
                ->get();

            $posts = $posts->sortBy('publish_at')->reverse();

            $view->with('posts', $posts);
        });


        $this->app['view']->composer('Unify::layout.widgets.clients', function(View $view){

            $clients = Client::has('images', '>', 0)
                ->take(30)
                ->get();

            $amount = $clients->count() > 10 ? 10 : $clients->count();

            $view->with('clients', $clients->shuffle()->random($amount));

        });

    }

}