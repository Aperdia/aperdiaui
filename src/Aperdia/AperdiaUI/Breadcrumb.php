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
    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    /**
     * Create a new Breadcrumb.
     *
     * @param array $attributes Attributes of breadcrumb
     *
     * @return Breadcrumb
     */
    public static function create(array $attributes = [])
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
    public function add(string $title, string $link = '', array $attributes = [])
    {
        $this->elements[] = [
            'title' => $title,
            'link' => $link,
            'attributes' => $attributes,
        ];

        return $this;
    }

    /**
     * Cover.
     *
     * @return Breadcrumb
     */
    public function cover()
    {
        $this->cover = true;

        return $this;
    }

    /**
     * Display breadcrumb.
     *
     * @return string|array
     */
    public function show()
    {
        if (empty($this->elements)) {
            return '';
        }

        return $this->view(
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
