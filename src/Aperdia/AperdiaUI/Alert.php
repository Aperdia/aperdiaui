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
    protected static function create($class, $message, $attributes = [])
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
        // class
        $_class = $this->class.' '.$this->type;

        // close
        if ($this->close === true) {
            $_class .= ' alert-dismissable';
        }

        return self::view(
            'alert',
            [
                'tag' => $this->tag,
                'attributes' => Helpers::addClass($this->attributes, $_class),
                'close' => $this->close,
                'message' => $this->message,
            ],
            true
        );
    }
}
