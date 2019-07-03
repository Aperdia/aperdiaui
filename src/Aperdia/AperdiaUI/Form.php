<?php

/**
 * Aperdia UI.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI;

use Collective\Html\FormFacade;
use Illuminate\Support\MessageBag;
use Request;
use View;

/**
 * Form.
 */
class Form extends FormFacade
{
    /**
     * Display input for form-group.
     *
     * @param string          $type       Type of input
     * @param string          $name       Name of input
     * @param string          $title      Title of input
     * @param mixed           $value      Value of input
     * @param MessageBag|null $errors
     * @param array           $attributes
     * @param string          $help       Help message
     * @param bool            $label      Display label
     * @param string          $iconpre    Display icon previous
     * @param string          $iconpost   Display icon post
     *
     * @return string
     */
    public static function inputGroup(
        string $type,
        string $name,
        string $title,
        $value = null,
        $errors = null,
        array $attributes = [],
        string $help = '',
        bool $label = true,
        string $iconpre = '',
        string $iconpost = ''
    ) {
        return self::view('form.inputGroup', [
            'type' => $type,
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'label' => $label,
            'help' => $help,
            'iconpost' => $iconpost,
            'iconpre' => $iconpre,
            'value' => Request::old($name) ?? $value,
            'attributes' => self::inputMode($attributes, $type),
        ]);
    }

    /**
     * Display input for form-group for multi-language.
     *
     * @param array      $languages  List of languages
     * @param string     $type       Type of input
     * @param string     $name       Name of input
     * @param string     $title      Title of input
     * @param mixed      $value      Value of input
     * @param MessageBag $errors
     * @param array      $attributes
     * @param string     $help       Help message
     *
     * @return string
     */
    public static function inputMultiLanguageGroup(
        array $languages,
        string $type,
        string $name,
        string $title,
        $value = null,
        $errors = null,
        array $attributes = [],
        string $help = ''
    ) {
        $inputLanguages = [];

        foreach ($languages as $val) {
            $value_tmp = Request::old($name.'['.$val['id'].']') ?? $value[$val['id']][$name] ?? '';

            $inputLanguages[] = [
                'type' => $type,
                'name' => $name.'['.$val['id'].']',
                'value' => $value_tmp,
                'attributes' => $attributes,
                'title' => $val['title'],
                'id' => $val['id'],
            ];
        }

        return self::view('form.inputMultiLanguageGroup', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'help' => $help,
            'inputLanguages' => $inputLanguages,
        ]);
    }

    /**
     * Display textarea for form-group.
     *
     * @param string     $name       Name of textarea
     * @param string     $title      Title of textarea
     * @param mixed      $value      Value of textarea
     * @param MessageBag $errors
     * @param array      $attributes
     * @param string     $help       Help message
     *
     * @return string
     */
    public static function textareaGroup(
        string $name,
        string $title,
        $value = null,
        $errors = null,
        array $attributes = [],
        string $help = ''
    ) {
        $attributes['rows'] = 5;

        return self::view('form.textareaGroup', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'help' => $help,
            'value' => Request::old($name) ?? $value,
            'attributes' => $attributes,
        ]);
    }

    /**
     * Display textarea for form-group.
     *
     * @param string     $name       Name of textarea
     * @param string     $title      Title of textarea
     * @param mixed      $value      Value of textarea
     * @param MessageBag $errors
     * @param array      $attributes
     * @param string     $help       Help message
     *
     * @return string
     */
    public static function textareaLine(
        string $name,
        string $title,
        $value = null,
        $errors = null,
        array $attributes = [],
        string $help = ''
    ) {
        $attributes['rows'] = 5;

        return self::view('form.textareaLine', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'help' => $help,
            'value' => Request::old($name) ?? $value,
            'attributes' => $attributes,
        ]);
    }

    /**
     * Display textarea for form-group for multi language.
     *
     * @param array      $languages  List of languages
     * @param string     $name       Name of textarea
     * @param string     $title      Title of textarea
     * @param mixed      $value      Value of textarea
     * @param MessageBag $errors
     * @param array      $attributes
     * @param string     $help       Help message
     *
     * @return string
     */
    public static function textareaMultiLanguageGroup(
        array $languages,
        string $name,
        string $title,
        $value = null,
        $errors = null,
        array $attributes = [],
        string $help = ''
    ) {
        $attributes['rows'] = 5;

        $translation = [];

        foreach ($languages as $val) {
            $value_tmp = Request::old($name.'['.$val['id'].']') ?? $value[$val['id']][$name] ?? '';

            $error = '';
            if (!is_null($errors) && $errors->has($name.'['.$val['id'].']')) {
                $error = $errors->first($name.'['.$val['id'].']');
            }

            $translation[] = [
                'title' => $val['title'],
                'name' => $name.'['.$val['id'].']',
                'value' => $value_tmp,
                'attributes' => $attributes,
                'error' => $error,
            ];
        }

        return self::view('form.textareaMultiLanguageGroup', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'help' => $help,
            'languages' => $translation,
        ]);
    }

    /**
     * Display select for form-group.
     *
     * @param string     $name       Name of select
     * @param string     $title      Title of select
     * @param array      $list       List of values
     * @param mixed      $value      Value of select
     * @param MessageBag $errors
     * @param array      $attributes
     * @param string     $help       Help message
     *
     * @return string
     */
    public static function selectGroup(
        string $name,
        string $title,
        array $list,
        $value = null,
        $errors = null,
        array $attributes = [],
        string $help = ''
    ) {
        return self::view('form.selectGroup', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'help' => $help,
            'list' => $list,
            'value' => Request::old($name) ?? $value,
            'attributes' => $attributes,
        ]);
    }

    /**
     * Display checkbox for form-group.
     *
     * @param string     $name       Name of checkbox
     * @param string     $title      Title of checkbox
     * @param mixed      $value      Value if checked
     * @param mixed      $input      Value by input
     * @param MessageBag $errors
     * @param array      $attributes
     * @param string     $help       Help message
     *
     * @return string
     */
    public static function checkboxGroup(
        string $name,
        string $title,
        $value = 1,
        $input = 0,
        $errors = null,
        array $attributes = [],
        string $help = ''
    ) {
        $input = Request::old($name) ?? $input;

        return self::view('form.checkboxGroup', [
            'title' => $title,
            'text' => self::checkbox($name, $value, ($input == $value), $attributes),
            'help' => $help,
            'errors' => $errors,
            'name' => $name,
        ]);
    }

    /**
     * Display checkbox for form-group, with switch.
     *
     * @param string     $name       Name of checkbox
     * @param string     $title      Title of checkbox
     * @param mixed      $value      Value if checked
     * @param mixed      $input      Value by input
     * @param MessageBag $errors
     * @param array      $attributes
     * @param string     $help       Help message
     *
     * @return string
     */
    public static function switchGroup(
        string $name,
        string $title,
        $value = 1,
        $input = 0,
        $errors = null,
        array $attributes = [],
        string $help = ''
    ) {
        return self::view('form.switch', compact('title', 'value', 'input', 'attributes', 'help', 'errors', 'name'));
    }

    /**
     * Display input radio for form-group.
     *
     * @param string     $name       Name of radio
     * @param string     $title      Title of radio
     * @param array      $choices    Choices
     * @param mixed      $value      Value if checked
     * @param MessageBag $errors
     * @param array      $attributes
     * @param string     $help       Help message
     *
     * @return string
     */
    public static function radioGroup(
        string $name,
        string $title,
        array $choices,
        $value = 1,
        $errors = null,
        array $attributes = [],
        string $help = ''
    ) {
        if (!is_array($choices)) {
            return '';
        }

        $text = '';

        foreach ($choices as $key => $_value) {
            $text .= self::radio($name, $key, ($key == $value), $attributes).' '.$_value.' ';
        }

        return self::view('form.radioGroup', [
            'title' => $title,
            'text' => $text,
            'help' => $help,
            'errors' => $errors,
            'name' => $name,
        ]);
    }

    /**
     * Display submit with cancel for form-group.
     *
     * @param array $options
     * @param array $attributes
     *
     * @return string
     */
    public static function submitGroup(array $options = [], array $attributes = [])
    {
        $options['submit_title'] = $options['submit_title'] ?? trans('form.submit');

        return self::view('form.submitGroup', compact('attributes', 'options'));
    }

    /**
     * Display text with title for form-group.
     *
     * @param string $text
     * @param string $title
     *
     * @return string
     */
    public static function textGroup(string $text, string $title = '')
    {
        return self::view('form.textGroup', [
            'title' => $title,
            'text' => $text,
        ]);
    }

    /**
     * Personalized views.
     *
     * @param string $viewName Name of the base view
     * @param array  $params   Params
     * @param bool   $render
     *
     * @return string|\Illuminate\Contracts\View\View
     */
    public static function view(string $viewName, array $params = [], bool $render = false)
    {
        return Helpers::view($viewName, $params, $render);
    }

    /**
     * Display time select.
     *
     * @param string     $name
     * @param string     $title
     * @param mixed      $value
     * @param MessageBag $errors
     * @param array      $attributes
     * @param string     $help
     *
     * @return string
     */
    public static function time(
        string $name,
        string $title,
        $value = null,
        $errors = null,
        array $attributes = [],
        string $help = ''
    ) {
        $values = [null => '--'];

        for ($h = 0; $h < 24; ++$h) {
            if ($h < 10) {
                $h = '0'.$h;
            }

            for ($m = 0; $m < 60; ++$m) {
                if ($m < 10) {
                    $m = '0'.$m;
                }

                $values[$h.':'.$m] = $h.':'.$m;

                $m = $m + 29;
            }
        }

        return self::selectGroup($name, $title, $values, $value, $errors, $attributes, $help);
    }

    /**
     * Add input mode, depending on input type.
     *
     * @param array $attributes
     * @param string $typeInput
     *
     * @return array
     */
    protected static function inputMode(array $attributes, string $typeInput)
    {
        if ($typeInput === "num") {
            $attributes = Helpers::addClass($attributes, 'numeric', 'inputmode');
        } elseif (in_array($typeInput, ['tel', 'email', 'url'])) {
            $attributes = Helpers::addClass($attributes, $typeInput, 'inputmode');
        }

        return $attributes;
    }
}
