<?php

declare(strict_types=1);

/**
 * Aperdia UI.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI;

/**
 * Indicator.
 */
class Indicator extends Core
{
    /**
     * Type of indicator.
     *
     * @var string
     */
    protected $type;

    /**
     * Class of indicator.
     *
     * @var string
     */
    protected $class = 'default';

    /**
     * Message in indicator.
     *
     * @var string
     */
    protected $message = '';

    /**
     * Attributes of indicator.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Tag.
     *
     * @var string
     */
    protected $tag = 'div';

    /**
     * Construct.
     *
     * @param string $class      Class of indicator
     * @param string $message    Message in indicator
     * @param array  $attributes Attributes of indicator
     */
    public function __construct(string $class, string $message, array $attributes = [])
    {
        if (ctype_alpha(str_replace(['-', '_', ' '], '', $class))) {
            $this->class = $class;
        }

        $this->message = $message;
        $this->attributes = $attributes;
    }

    /**
     * Create a new Indicator.
     *
     * @param string $class      Class custom of indicator
     * @param string $message    Message in indicator
     * @param array  $attributes Attributes of indicator
     */
    protected static function create(string $class, string $message, array $attributes = []): self
    {
        return new self($class, $message, $attributes);
    }

    /**
     * Call an indicator by color.
     *
     * @param string $method Method called
     * @param array  $params Params of method
     */
    public static function __callStatic(string $method, array $params): self
    {
        // verif if color exists
        if (in_array($method, Helpers::getColors())) {
            $method = 'alert-'.$method;
        } else {
            $method = 'alert-info';
        }

        array_unshift($params, $method);

        return call_user_func_array('static::create', $params);
    }

    /**
     * Create a custom indicator.
     *
     * @param string $class      Class custom of indicator
     * @param string $message    Message in indicator
     * @param array  $attributes Attributes of indicator
     */
    public static function custom(string $class, string $message, array $attributes = []): self
    {
        return static::create($class, $message, $attributes);
    }

    /**
     * Update tag.
     *
     * @param string $tag Tag
     */
    public function tag(string $tag): self
    {
        if (ctype_alpha($tag)) {
            $this->tag = $tag;
        }

        return $this;
    }

    /**
     * Return html.
     *
     * @return string|array
     */
    public function show()
    {
        return $this->view(
            'indicator',
            [
                'tag' => $this->tag,
                'attributes' => Helpers::addClass($this->attributes, $this->class.' '.$this->type),
                'message' => $this->message,
            ]
        );
    }
}
