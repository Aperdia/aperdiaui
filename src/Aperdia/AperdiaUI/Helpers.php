<?php

/**
 * Aperdia UI.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI;

/**
 * Helpers.
 */
class Helpers
{
    /**
     * Colors.
     *
     * @var array
     */
    protected const COLORS = [
        'primary', 'secondary', 'normal', 'info', 'danger', 'warning', 'success', 'light', 'dark',
    ];

    /**
     * Returns array of colors.
     */
    public static function getColors(): array
    {
        return self::COLORS;
    }

    /**
     * Add value in an array.
     *
     * @param array  $array Array object
     * @param string $value Value to add
     * @param string $key   Array key to use
     */
    public static function addClass(array $array, string $value, string $key = 'class'): array
    {
        $array[$key] = isset($array[$key]) ? $array[$key].' '.$value : $value;

        return $array;
    }

    /**
     * Personalized views.
     *
     * @param string $viewName Name of the base view
     * @param array  $params   Params
     * @param bool   $render
     *
     * @return string|array
     */
    public static function view(string $viewName, array $params = [], bool $render = false)
    {
        $res = view('aperdiaui::'.config('aperdiaui.style').'.'.$viewName, $params);

        if ($render) {
            return $res->render();
        }

        return $res;
    }
}
