<?php

/**
 * Aperdia UI.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI\Provider;

use Illuminate\Support\ServiceProvider;

/**
 * Service Provider of AperdiaUI.
 */
class AperdiaUIServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../../../config/aperdiaui.php', 'aperdiaui');

        $this->loadViewsFrom(__DIR__.'/../../../views', 'aperdiaui');

        $this->loadTranslationsFrom(__DIR__.'/../../../translations', 'aperdiaui');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
