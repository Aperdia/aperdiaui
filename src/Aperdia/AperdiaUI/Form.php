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
     * Open form-horizontal.
     *
     * @param array $options
     *
     * @return string
     */
    public static function openHorizontal($options = [])
    {
        return self::open(Helpers::addClass($options, 'form-horizontal'));
    }

    /**
     * Display input for form basic.
     *
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
    public static function inputBasic(
        $type,
        $name,
        $title = null,
        $value = null,
        $errors = null,
        $attributes = [],
        $help = null
    ) {
        $attributes = Helpers::addClass($attributes, 'form-control');

        $text = self::input($type, $name, Request::old($name) ? Request::old($name) : $value, $attributes);

        return self::view('form.inputGroup', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'help' => $help,
            'text' => $text,
        ]);
    }

    /**
     * Display select for form basic.
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
    public static function selectBasic(
        $name,
        $title,
        $list,
        $value = null,
        $errors = null,
        $attributes = [],
        $help = null
    ) {
        $attributes = Helpers::addClass($attributes, 'form-control');

        $text = self::select($name, $list, Request::old($name) ? Request::old($name) : $value, $attributes);

        return self::view('form.inputGroup', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'help' => $help,
            'text' => $text,
        ]);
    }

    /**
     * Display input for form-group.
     *
     * @param string     $type       Type of input
     * @param string     $name       Name of input
     * @param string     $title      Title of input
     * @param mixed      $value      Value of input
     * @param MessageBag $errors
     * @param array      $attributes
     * @param string     $help       Help message
     * @param bool       $label      Display label
     * @param string     $iconpre    Display icon previous
     * @param string     $iconpost   Display icon post
     *
     * @return string
     */
    public static function inputGroup(
        $type,
        $name,
        $title,
        $value = null,
        $errors = null,
        $attributes = [],
        $help = null,
        $label = true,
        $iconpre = null,
        $iconpost = null
    ) {
        $attributes = Helpers::addClass($attributes, 'form-control');

        $text = self::input($type, $name, Request::old($name) ? Request::old($name) : $value, $attributes);

        return self::view('form.inputGroup', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'label' => $label,
            'help' => $help,
            'iconpost' => $iconpost,
            'iconpre' => $iconpre,
            'text' => $text,
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
        $languages,
        $type,
        $name,
        $title,
        $value = null,
        $errors = null,
        $attributes = [],
        $help = null
    ) {
        $attributes = Helpers::addClass($attributes, 'form-control');

        $inputLanguages = '';

        foreach ($languages as $val) {
            $value_tmp = Request::old($name.'['.$val['id'].']') ? Request::old($name.'['.$val['id'].']') : null;

            if (empty($value_tmp)) {
                $value_tmp = isset($value[$val['id']][$name]) ? $value[$val['id']][$name] : null;
            }

            $inputLanguages[] = [
                'input' => self::input($type, $name.'['.$val['id'].']', $value_tmp, $attributes),
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
        $name,
        $title,
        $value = null,
        $errors = null,
        $attributes = [],
        $help = null
    ) {
        $attributes = Helpers::addClass($attributes, 'form-control');
        $attributes['rows'] = 5;

        $text = self::textarea($name, Request::old($name) ? Request::old($name) : $value, $attributes);

        return self::view('form.textareaGroup', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'help' => $help,
            'text' => $text,
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
        $name,
        $title,
        $value = null,
        $errors = null,
        $attributes = [],
        $help = null
    ) {
        $attributes = Helpers::addClass($attributes, 'form-control');
        $attributes['rows'] = 5;

        $text = self::textarea($name, Request::old($name) ? Request::old($name) : $value, $attributes);

        return self::view('form.textareaLine', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'help' => $help,
            'text' => $text,
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
        $languages,
        $name,
        $title,
        $value = null,
        $errors = null,
        $attributes = [],
        $help = null
    ) {
        $attributes = Helpers::addClass($attributes, 'form-control');
        $attributes['rows'] = 5;

        $text = null;

        foreach ($languages as $val) {
            $value_tmp = Request::old($name.'['.$val['id'].']') ? Request::old($name.'['.$val['id'].']') : null;

            if (empty($value_tmp)) {
                $value_tmp = isset($value[$val['id']][$name]) ? $value[$val['id']][$name] : null;
            }

            $text .= '<div>'.$val['title'].'</div>';

            $text .= self::textarea($name.'['.$val['id'].']', $value_tmp, $attributes);

            if (!is_null($errors) && $errors->has($name.'['.$val['id'].']')) {
                $text .= '<span class="text-danger">'.$errors->first($name.'['.$val['id'].']').'</span>';
            }
        }

        return self::view('form.textareaMultiLanguageGroup', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'help' => $help,
            'text' => $text,
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
        $name,
        $title,
        $list,
        $value = null,
        $errors = null,
        $attributes = [],
        $help = null
    ) {
        $attributes = Helpers::addClass($attributes, 'form-control');

        return self::view('form.selectGroup', [
            'errors' => $errors,
            'name' => $name,
            'title' => $title,
            'help' => $help,
            'text' => self::select($name, $list, Request::old($name) ? Request::old($name) : $value, $attributes),
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
        $name,
        $title,
        $value = 1,
        $input = 0,
        $errors = null,
        $attributes = [],
        $help = null
    ) {
        $input = Request::old($name) ? Request::old($name) : $input;

        return self::view('form.checkboxGroup', [
            'title' => $title,
            'text' => self::checkbox($name, $value, ($input == $value), $attributes),
            'help' => $help,
            'errors' => $errors,
            'name' => $name,
        ]);
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
        $name,
        $title,
        $choices,
        $value = 1,
        $errors = null,
        $attributes = [],
        $help = null
    ) {
        if (!is_array($choices)) {
            return;
        }

        $text = null;

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
    public static function submitGroup($options = [], $attributes = [])
    {
        $attributes = Helpers::addClass($attributes, 'btn btn-primary');

        $options['submit_title'] = array_get($options, 'submit_title', trans('form.submit'));

        $text = self::submit($options['submit_title'], $attributes);

        /*
         * Url for cancel
         */
        if (isset($options['cancel_url'])) {
            $text .= ' '.link_to($options['cancel_url'], trans('form.cancel'));
        }

        /*
         * Reset
         */
        if (isset($options['reset']) && $options['reset'] === true) {
            $text .= ' '.self::reset('Reset', ['class' => 'btn btn-default']);
        }

        return self::view('form.submitGroup', [
            'text' => $text,
        ]);
    }

    /**
     * Display text with title for form-group.
     *
     * @param string $title
     * @param string $text
     *
     * @return string
     */
    public static function textGroup($title, $text)
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
     */
    public static function view($viewName, $params = [], $render = false)
    {
        $res = view('aperdiaui::'.config('aperdiaui.style').'.'.$viewName, $params);

        if ($render) {
            return $res->render();
        }

        return $res;
    }
}
