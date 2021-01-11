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
    protected $title = '';

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
    public function __construct(string $title = 'Action', array $attributes = [])
    {
        $this->title = $title;
        $this->attributes = $attributes;
    }

    /**
     * Create a new Dropdown.
     *
     * @param string $title      Title of dropdown
     * @param array  $attributes Attributes of dropdown
     */
    public static function create(string $title = 'Action', array $attributes = []): self
    {
        return new self($title, $attributes);
    }

    /**
     * Add link.
     *
     * @param string $title Title of element
     * @param string $link  Link of element
     * @param string $icon  Icon of element
     */
    public function addLink(string $title, string $link = '', string $icon = ''): self
    {
        $this->elements[] = [
            'type' => 'link',
            'title' => $title,
            'link' => $link,
            'icon' => $icon,
        ];

        return $this;
    }

    /**
     * Add divider.
     */
    public function addDivider(): self
    {
        $this->elements[] = [
            'type' => 'divider',
        ];

        return $this;
    }

    /**
     * Add text.
     *
     * @param string $text
     */
    public function addText(string $text): self
    {
        $this->elements[] = [
            'type' => 'text',
            'text' => $text,
        ];

        return $this;
    }

    /**
     * Display dropdown.
     *
     * @return string|array
     */
    public function show()
    {
        if (empty($this->elements)) {
            return '';
        }

        return $this->view(
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
