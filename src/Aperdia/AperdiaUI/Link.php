<?php

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
     *
     * @return Link List of links
     */
    public static function create(array $attributes = [])
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
     *
     * @return Link List of links
     */
    public function addLink(string $title, string $link = '', string $icon = '', bool $onclick = false)
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
     *
     * @return Link List of links
     */
    public function addDivider()
    {
        $this->elements[] = [
            'type' => 'divider',
        ];

        return $this;
    }

    /**
     * Add title.
     *
     * @param string $title
     *
     * @return Link List of links
     */
    public function addTitle(string $title)
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
