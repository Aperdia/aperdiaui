<?php

/**
 * Aperdia UI.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI;

/**
 * Alert.
 */
class Alert extends Indicator
{
    /**
     * Type of indicator.
     *
     * @var string
     */
    protected $type = 'alert';

    /**
     * Close.
     *
     * @var bool
     */
    protected $close = false;

    /**
     * Add link for close.
     *
     * @return Alert
     */
    public function close()
    {
        $this->close = true;

        return $this;
    }

    /**
     * Display Alert.
     *
     * @return string
     */
    public function show()
    {
        return $this->view(
            'alert',
            [
                'type' => $this->type,
                'tag' => $this->tag,
                'attributes' => $this->attributes,
                'close' => $this->close,
                'message' => $this->message,
                'class' => $this->class,
            ],
            true
        );
    }
}
