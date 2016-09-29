<?php

/**
 * Aperdia UI.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI;

/**
 * Dropdown.
 */
class Dropdown extends Core
{
    /**
     * Title of dropdown.
     *
     * @var string
     */
    protected $title = null;

    /**
     * Elements of dropdown.
     *
     * @var array
     */
    protected $elements = [];

    /**
     * Attributes of dropdown.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Construct.
     *
     * @param string $title      Title of dropdown
     * @param array  $attributes Attributes of dropdown
     */
    public function __construct($title = 'Action', $attributes = [])
    {
        $this->title = $title;

        if (!empty($attributes) && is_array($attributes)) {
            $this->attributes = $attributes;
        }
    }

    /**
     * Create a new Dropdown.
     *
     * @param string $title      Title of dropdown
     * @param array  $attributes Attributes of dropdown
     *
     * @return Dropdown
     */
    public static function create($title = 'Action', $attributes = [])
    {
        return new self($title, $attributes);
    }

    /**
     * Add link.
     *
     * @param string $title Title of element
     * @param string $link  Link of element
     * @param string $icon  Icon of element
     *
     * @return Dropdown
     */
    public function addLink($title, $link = null, $icon = null)
    {
        $this->elements[] = [
            'type' => 'link',
            'title' => e($title),
            'link' => (string) $link,
            'icon' => $icon,
        ];

        return $this;
    }

    /**
     * Add header.
     *
     * @param string $title Title of element
     *
     * @return Dropdown
     */
    public function addHeader($title)
    {
        $this->elements[] = [
            'type' => 'header',
            'title' => e($title),
        ];

        return $this;
    }

    /**
     * Add divider.
     *
     * @return Dropdown
     */
    public function addDivider()
    {
        $this->elements[] = [
            'type' => 'divider',
        ];

        return $this;
    }

    /**
     * Add disabled.
     *
     * @param string $title Title of element
     *
     * @return Dropdown
     */
    public function addDisabled($title)
    {
        $this->elements[] = [
            'type' => 'disabled',
            'title' => e($title),
        ];

        return $this;
    }

    /**
     * Display dropdown.
     *
     * @return string
     */
    public function show()
    {
        if (empty($this->elements)) {
            return;
        }

        return self::view(
            'dropdown',
            [
                'attributes' => $this->attributes,
                'title' => $this->title,
                'elements' => $this->elements,
            ],
            true
        );
    }
}
