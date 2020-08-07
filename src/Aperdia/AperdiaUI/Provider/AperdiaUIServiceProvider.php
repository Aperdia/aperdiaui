<?php

/**
 * Aperdia UI.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI\Provider;

use Illuminate\Support\ServiceProvider;
use Collective\Html\FormFacade as Form;

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
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../../../config/aperdiaui.php', 'aperdiaui');

        $this->loadViewsFrom(__DIR__.'/../../../views', 'aperdiaui');

        $this->loadTranslationsFrom(__DIR__.'/../../../translations', 'aperdiaui');

        $style = config('aperdiaui.style', 'bulma');

        Form::component('checkboxGroup', 'aperdiaui::form.'.$style.'.checkboxGroup', ['name', 'title' => '', 'value' => 1, 'input' => 0, 'attributes' => [], 'help' => '']);

        Form::component('dateGroup', 'aperdiaui::form.'.$style.'.dateGroup', ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '', 'icon' => []]);

        Form::component('emailGroup', 'aperdiaui::form.'.$style.'.emailGroup', ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '', 'icon' => []]);

        Form::component('fileGroup', 'aperdiaui::form.'.$style.'.fileGroup', ['name', 'title' => '', 'attributes' => [], 'help' => '']);

        Form::component('gallery', 'aperdiaui::form.'.$style.'.gallery', ['entity', 'categories' => [], 'galleryImage' => '']);

        Form::component('inputGroup', 'aperdiaui::form.'.$style.'.inputGroup', ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '', 'icon' => []]);

        Form::component('inputMultiLanguageGroup', 'aperdiaui::form.'.$style.'.inputMultiLanguageGroup', ['languages', 'name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '']);

        Form::component('numberGroup', 'aperdiaui::form.'.$style.'.numberGroup', ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '', 'icon' => []]);

        Form::component('passwordGroup', 'aperdiaui::form.'.$style.'.passwordGroup', ['name', 'title' => '', 'attributes' => [], 'help' => '', 'icon' => []]);

        Form::component('selectGroup', 'aperdiaui::form.'.$style.'.selectGroup', ['name', 'title' => '', 'list' => [], 'value' => '', 'attributes' => [], 'help' => '']);

        Form::component('submitGroup', 'aperdiaui::form.'.$style.'.submitGroup', ['options' => [], 'attributes' => []]);

        Form::component('switchGroup', 'aperdiaui::form.'.$style.'.switchGroup', ['name', 'title' => '', 'input' => '', 'value' => '', 'attributes' => []]);

        Form::component('telGroup', 'aperdiaui::form.'.$style.'.telGroup', ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '', 'icon' => []]);

        Form::component('textareaGroup', 'aperdiaui::form.'.$style.'.textareaGroup', ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '']);

        Form::component('textareaMultiLanguageGroup', 'aperdiaui::form.'.$style.'.textareaMultiLanguageGroup', ['languages', 'name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '']);

        Form::component('textGroup', 'aperdiaui::form.'.$style.'.textGroup', ['text', 'title' => '']);

        Form::component('time', 'aperdiaui::form.'.$style.'.time', ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '']);

        Form::component('urlGroup', 'aperdiaui::form.'.$style.'.urlGroup', ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '']);
    }

    /**
     * Register the service provider.
     *
     * @return void
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
