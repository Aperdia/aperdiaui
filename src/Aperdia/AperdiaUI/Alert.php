<?php

declare(strict_types=1);

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
     * Create a new Alert.
     *
     * @param string $class      Class of indicator
     * @param string $message    Message in indicator
     * @param array  $attributes Attributes of indicator
     */
    protected static function create(string $class, string $message, array $attributes = []): self
    {
        return new self($class, $message, $attributes);
    }

    /**
     * Add link for close.
     */
    public function close(): self
    {
        $this->close = true;

        return $this;
    }

    /**
     * Display Alert.
     *
     * @return string|array
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
