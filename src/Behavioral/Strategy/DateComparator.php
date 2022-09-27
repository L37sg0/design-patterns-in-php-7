<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Strategy;

use DateTime;

class DateComparator implements Comparator
{

    /**
     * @inheritDoc
     */
    public function compare($a, $b): int
    {
        $aDate = new DateTime($a['date']);
        $bDate = new DateTime($b['date']);

        return $aDate <=> $bDate;
    }
}