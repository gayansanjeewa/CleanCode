<?php

class SalesReporter
{
    private $include;

    private function isInclusive()
    {
        return $this->include;
    }

    public function between($startDate, $endDate)
    {
        $allDates = [];
        $calculatedValues = [];
        if ($this->isInclusive()) {
            foreach ($allDates as $index => $date) {
                if ($index > $startDate && $index < $endDate) {
                    $calculatedValues[] = $date;
                }
            }
        } else {
            foreach ($allDates as $index => $date) {
                if ($index >= $startDate && $index <= $endDate) {
                    $calculatedValues[] = $date;
                }
            }
        }
        return $calculatedValues;
    }

    // ----------------------------------------------------------------------
    public function formatReport($typeHtml)
    {
        if ($typeHtml) {
            return 'report in html';
        } else {
            return 'report in json';
        }
    }
}

$salesReport = (new SalesReporter())->inclusive();

$startDate = '';
$endDate = '';
$salesReport->between($startDate, $endDate);
