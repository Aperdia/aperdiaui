<?php

/**
 * Aperdia UI.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI;

/**
 * Core.
 */
class Core
{
    /**
     * Display.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->show();
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
