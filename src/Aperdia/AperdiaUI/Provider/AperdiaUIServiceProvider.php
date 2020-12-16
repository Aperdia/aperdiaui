<?php

/**
 * Aperdia UI.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI\Provider;

use Collective\Html\FormFacade as Form;
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
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/../../../config/aperdiaui.php', 'aperdiaui');

        $this->loadViewsFrom(__DIR__.'/../../../views', 'aperdiaui');

        $this->loadTranslationsFrom(__DIR__.'/../../../translations', 'aperdiaui');

        $style = config('aperdiaui.style', 'bulma');

        Form::component(
            'checkboxGroup',
            'aperdiaui::'.$style.'.form.checkboxGroup',
            ['name', 'title' => '', 'value' => 1, 'input' => 0, 'attributes' => [], 'help' => '']
        );

        Form::component(
            'dateGroup',
            'aperdiaui::'.$style.'.form.dateGroup',
            ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '', 'icon' => []]
        );

        Form::component(
            'emailGroup',
            'aperdiaui::'.$style.'.form.emailGroup',
            ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '', 'icon' => []]
        );

        Form::component(
            'fileGroup',
            'aperdiaui::'.$style.'.form.fileGroup',
            ['name', 'title' => '', 'attributes' => [], 'help' => '']
        );

        Form::component(
            'gallery',
            'aperdiaui::'.$style.'.form.gallery',
            ['entity', 'categories' => [], 'galleryImage' => '']
        );

        Form::component(
            'inputGroup',
            'aperdiaui::'.$style.'.form.inputGroup',
            ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '', 'icon' => []]
        );

        Form::component(
            'inputMultiLanguageGroup',
            'aperdiaui::'.$style.'.form.inputMultiLanguageGroup',
            ['languages', 'name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '']
        );

        Form::component(
            'numberGroup',
            'aperdiaui::'.$style.'.form.numberGroup',
            ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '', 'icon' => []]
        );

        Form::component(
            'passwordGroup',
            'aperdiaui::'.$style.'.form.passwordGroup',
            ['name', 'title' => '', 'attributes' => [], 'help' => '', 'icon' => []]
        );

        Form::component(
            'selectGroup',
            'aperdiaui::'.$style.'.form.selectGroup',
            ['name', 'title' => '', 'list' => [], 'value' => '', 'attributes' => [], 'help' => '']
        );

        Form::component(
            'submitGroup',
            'aperdiaui::'.$style.'.form.submitGroup',
            ['options' => [], 'attributes' => []]
        );

        Form::component(
            'switchGroup',
            'aperdiaui::'.$style.'.form.switchGroup',
            ['name', 'title' => '', 'input' => '', 'value' => '', 'attributes' => []]
        );

        Form::component(
            'telGroup',
            'aperdiaui::'.$style.'.form.telGroup',
            ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '', 'icon' => []]
        );

        Form::component(
            'textareaGroup',
            'aperdiaui::'.$style.'.form.textareaGroup',
            ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '']
        );

        Form::component(
            'textareaMultiLanguageGroup',
            'aperdiaui::'.$style.'.form.textareaMultiLanguageGroup',
            ['languages', 'name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '']
        );

        Form::component(
            'textGroup',
            'aperdiaui::'.$style.'.form.textGroup',
            ['text', 'title' => '']
        );

        Form::component(
            'time',
            'aperdiaui::'.$style.'.form.time',
            ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '']
        );

        Form::component(
            'urlGroup',
            'aperdiaui::'.$style.'.form.urlGroup',
            ['name', 'title' => '', 'value' => '', 'attributes' => [], 'help' => '']
        );
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
