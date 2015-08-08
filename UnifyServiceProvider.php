<?php namespace Themes\Unify;

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

    }

}