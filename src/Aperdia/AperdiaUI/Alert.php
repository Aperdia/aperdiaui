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
     * Tag.
     *
     * @var string
     */
    protected $tag = 'div';

    /**
     * Close.
     *
     * @var bool
     */
    protected $close = false;

    /**
     * Create a new Alert.
     *
     * @param string $class      Class of indicator
     * @param string $message    Message in indicator
     * @param array  $attributes Attributes of indicator
     *
     * @return Alert
     */
    protected static function create(string $class, string $message, array $attributes = [])
    {
        return new self($class, $message, $attributes);
    }

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
