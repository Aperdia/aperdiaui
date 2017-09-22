<?php

/**
 * Aperdia.
 *
 * @copyright Aperdia
 */

namespace Aperdia\AperdiaUI;

use Kilte\Pagination\Pagination use KiltePagination;

/**
 * Pagination.
 */
class Pagination
{
    /**
     * Pagination.
     *
     * @param string $url         URL of link
     * @param int    $total       Total
     * @param int    $currentPage Current page
     * @param int    $nbrByPage   Number by page
     * @param int    $neighbord   Neighbord
     *
     * @return string
     */
    public static function get(string $url, int $total, int $currentPage, int $nbrByPage = 10, int $neighbord = 4)
    {
        $pagination = new KiltePagination($total, $currentPage, $nbrByPage, $neighbord);
        $pagination = $pagination->build();
        
        return $this->view('pagination', compact('pagination'));
    }
}
