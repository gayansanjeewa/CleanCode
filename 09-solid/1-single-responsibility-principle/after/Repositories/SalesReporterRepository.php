<?php

namespace after\Repositories;

use DB;

class SalesReporterRepository
{
    /**
     * @param $startDate
     * @param $endDate
     * @return float|int
     */
    public function between($startDate, $endDate)
    {
        return DB::table('sales')->whereBetween($startDate, $endDate)->sum() / 100;
    }
}