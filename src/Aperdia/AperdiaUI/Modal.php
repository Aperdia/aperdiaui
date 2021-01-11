<?php

declare(strict_types=1);

/**
 * Aperdia.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI;

/**
 * Modal.
 */
class Modal
{
    /**
     * Simple modal.
     *
     * @param string $content
     * @param array  $attributes
     *
     * @return string|array
     */
    public static function get(string $content, array $attributes = [])
    {
        return Helpers::view('modal', compact('content', 'attributes'));
    }

    /**
     * Card Modal.
     *
     * @param string $content
     * @param array  $attributes
     * @param bool   $hasHeader
     * @param string $title
     * @param bool   $hasFooter
     * @param string $buttonSuccess
     * @param string $buttonCancel
     *
     * @return string|array
     */
    public static function getCard(
        string $content,
        array $attributes = [],
        bool $hasHeader = false,
        string $title = '',
        bool $hasFooter = false,
        string $buttonSuccess = '',
        string $buttonCancel = ''
    ) {
        return Helpers::view(
            'modal-card',
            compact('content', 'attributes', 'hasHeader', 'title', 'hasFooter', 'buttonSuccess', 'buttonCancel')
        );
    }
}
