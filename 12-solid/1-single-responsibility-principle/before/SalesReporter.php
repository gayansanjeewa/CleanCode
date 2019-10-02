<?php

namespace before;

use Auth;
use DB;

class SalesReporter
{
    /**
     * @param string $startDate
     * @param string $endDate
     * @return string
     * @throws \Exception
     */
    public function between($startDate, $endDate)
    {
        if (!Auth::check()) {
            throw new \Exception('Authentication required');
        }

        $sales = $this->queryDbForSalesBetween($startDate, $endDate);

        return $this->format($sales);
    }

    /**
     * @param string $startDate
     * @param string $endDate
     * @return float
     */
    private function queryDbForSalesBetween($startDate, $endDate)
    {
        return DB::table('sales')->whereBetween($startDate, $endDate)->sum() / 100;
    }

    /**
     * @param $sales
     * @return string
     */
    private function format($sales)
    {
        return "<h1>Sales: $sales</h1>";
    }
}