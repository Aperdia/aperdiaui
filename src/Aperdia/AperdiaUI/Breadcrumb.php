<?php

/**
 * Aperdia UI.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI;

/**
 * Breadcrumb.
 */
class Breadcrumb extends Core
{
    /**
     * Elements of breadcrumb.
     *
     * @var array
     */
    protected $elements = [];

    /**
     * Attributes of breadcrumb.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Alone in cover.
     *
     * @var bool
     */
    protected $cover = false;

    /**
     * Construct.
     *
     * @param array $attributes Attributes of breadcrumb
     */
    public function __construct($attributes = [])
    {
        if (!empty($attributes) && is_array($attributes)) {
            $this->attributes = $attributes;
        }
    }

    /**
     * Create a new Breadcrumb.
     *
     * @param array $attributes Attributes of breadcrumb
     *
     * @return Breadcrumb
     */
    public static function create($attributes = [])
    {
        return new self($attributes);
    }

    /**
     * Add element.
     *
     * @param string $title      Title of element
     * @param string $link       Link of element
     * @param array  $attributes Attributes of element
     *
     * @return Breadcrumb
     */
    public function add($title, $link = null, $attributes = [])
    {
        $this->elements[] = [
            'title' => e($title),
            'link' => (string) $link,
            'attributes' => $attributes,
        ];

        return $this;
    }

    /**
     * Cover.
     */
    public function cover()
    {
        $this->cover = true;

        return $this;
    }

    /**
     * Display breadcrumb.
     *
     * @return string
     */
    public function show()
    {
        if (empty($this->elements)) {
            return;
        }

        return self::view(
            'breadcrumb',
            [
                'attributes' => $this->attributes,
                'elements' => $this->elements,
                'cover' => $this->cover,
            ],
            true
        );
    }
}
