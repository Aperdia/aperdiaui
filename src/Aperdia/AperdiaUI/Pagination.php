<?php

declare(strict_types=1);

/**
 * Aperdia.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI;

/**
 * Pagination.
 */
class Pagination
{
    /**
     * Number of the first page.
     */
    protected const BASE_PAGE = 1;

    /**
     * First page.
     */
    protected const TAG_FIRST = 'first';

    /**
     * The page before the previous neighbour pages.
     */
    protected const TAG_LESS = 'less';

    /**
     * Previous pages.
     */
    protected const TAG_PREVIOUS = 'previous';

    /**
     * Current page.
     */
    protected const TAG_CURRENT = 'current';

    /**
     * Next pages.
     */
    protected const TAG_NEXT = 'next';

    /**
     * The page after the next neighbour pages.
     */
    protected const TAG_MORE = 'more';

    /**
     * Last page.
     */
    protected const TAG_LAST = 'last';

    /**
     * @var int Total Items
     */
    private $totalItems;

    /**
     * @var int Number of the current page
     */
    private $currentPage;

    /**
     * @var int Items per page
     */
    private $perPage;

    /**
     * @var int Total pages
     */
    private $totalPages;

    /**
     * @var int Number of neighboring pages at the left and the right sides
     */
    private $neighbours;

    /**
     * Create instance.
     *
     * @param int $totalItems  Total items
     * @param int $currentPage Number of the current page
     * @param int $perPage     Items per page
     * @param int $neighbours  Number of neighboring pages at the left and the right sides
     *
     * @throws \LogicException
     */
    public function __construct(int $totalItems, int $currentPage, int $perPage, int $neighbours = 4)
    {
        $this->totalItems = (int) $totalItems;
        $this->currentPage = (int) $currentPage;
        $this->perPage = (int) $perPage;
        $this->neighbours = (int) $neighbours;

        if ($this->perPage <= 0) {
            throw new \LogicException('Items per page must be at least 1');
        }

        if ($this->neighbours <= 0) {
            throw new \LogicException('Number of neighboring pages must be at least 1');
        }

        if ($this->currentPage < self::BASE_PAGE) {
            $this->currentPage = self::BASE_PAGE;
        }

        $this->totalPages = (int) ceil($this->totalItems / $this->perPage);

        if ($this->currentPage > $this->totalPages) {
            $this->currentPage = $this->totalPages;
        }
    }

    /**
     * Display.
     */
    public function build(): array
    {
        if ($this->totalItems === 0 || $this->totalPages === 1) {
            return [];
        }

        $output = [];

        // Previous
        $offset = $this->currentPage - 1;
        $limit = $this->currentPage - $this->neighbours;
        $limit = $limit < self::BASE_PAGE ? self::BASE_PAGE : $limit;

        for ($i = $offset; $i >= $limit; --$i) {
            $output[$i] = self::TAG_PREVIOUS;
        }

        if ($limit - self::BASE_PAGE >= 2) {
            $output[$limit - 1] = self::TAG_LESS;
        }

        // First
        if ($this->currentPage - $this->neighbours > self::BASE_PAGE) {
            $output[self::BASE_PAGE] = self::TAG_FIRST;
        }

        // Next
        $offset = $this->currentPage + 1;
        $limit = $this->currentPage + $this->neighbours;
        $limit = $limit > $this->totalPages ? $this->totalPages : $limit;

        for ($i = $offset; $i <= $limit; ++$i) {
            $output[$i] = self::TAG_NEXT;
        }

        if ($this->totalPages - $limit > 0) {
            $output[$limit + 1] = self::TAG_MORE;
        }

        // Last
        if ($this->currentPage + $this->neighbours < $this->totalPages) {
            $output[$this->totalPages] = self::TAG_LAST;
        }

        // Current
        $output[$this->currentPage] = self::TAG_CURRENT;

        ksort($output);

        return $output;
    }

    /**
     * Pagination.
     *
     * @param string $url         URL of link
     * @param int    $total       Total
     * @param int    $currentPage Current page
     * @param int    $nbrByPage   Number by page
     * @param int    $neighbord   Neighbord
     *
     * @return string|array
     */
    public static function get(string $url, int $total, int $currentPage, int $nbrByPage = 10, int $neighbord = 4)
    {
        $pagination = new self($total, $currentPage, $nbrByPage, $neighbord);
        $pagination = $pagination->build();

        return Helpers::view('pagination', compact('pagination', 'url'));
    }
}
