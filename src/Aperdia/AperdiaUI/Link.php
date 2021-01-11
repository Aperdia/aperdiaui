<?php

declare(strict_types=1);

/**
 * Aperdia UI.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI;

/**
 * Link.
 */
class Link extends Core
{
    /**
     * Elements of list of links.
     *
     * @var array
     */
    protected $elements = [];

    /**
     * Attributes of list of links.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Construct.
     *
     * @param array $attributes Attributes of list of links
     */
    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    /**
     * Create a new list of links.
     *
     * @param array $attributes Attributes of list of links
     */
    public static function create(array $attributes = []): self
    {
        return new self($attributes);
    }

    /**
     * Add link.
     *
     * @param string $title   Title of element
     * @param string $link    Link of element
     * @param string $icon    Icon of element
     * @param bool   $onclick Onclick property
     */
    public function addLink(string $title, string $link = '', string $icon = '', bool $onclick = false): self
    {
        if (empty($link)) {
            return $this;
        }

        $element = [
            'type' => 'link',
            'title' => $title,
            'icon' => $icon,
        ];

        if ($onclick) {
            $element['onclick'] = $link;
        } else {
            $element['link'] = $link;
        }

        $this->elements[] = $element;

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
     * Add title.
     */
    public function addTitle(string $title): self
    {
        $this->elements[] = [
            'type' => 'title',
            'title' => $title,
        ];

        return $this;
    }

    /**
     * Display list of links.
     *
     * @return string|array
     */
    public function show()
    {
        if (empty($this->elements)) {
            return '';
        }

        return $this->view(
            'link',
            [
                'attributes' => $this->attributes,
                'elements' => $this->elements,
            ],
            true
        );
    }
}
