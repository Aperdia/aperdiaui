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
     */
    public function __toString(): string
    {
        return $this->show();
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
    public function view(string $viewName, array $params = [], bool $render = false)
    {
        $res = view('aperdiaui::'.config('aperdiaui.style').'.'.$viewName, $params);

        if ($render) {
            return $res->render();
        }

        return $res;
    }

    /**
     * Show.
     */
    public function show()
    {
        return '';
    }
}
