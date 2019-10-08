<?php

// FUNCTIONS SHOULD DO ONE THING.
// THEY SHOULD DO IT WELL.
// THEY SHOULD DO IT ONLY.
class SalesReporter
{
    private $include;

    private function isInclusive()
    {
        return $this->include;
    }

    public function between($startDate, $endDate)
    {
        if ($this->isInclusive()) {
            return $this->betweenInclusive($startDate, $endDate);
        }

        return $this->betweenExclusive($startDate, $endDate);
    }

    private function betweenInclusive($startDate, $endDate)
    {
        $allDates = []; // get from storage
        $calculatedValues = [];

        foreach ($allDates as $index => $date) {
            if ($index < $startDate || $index > $endDate) {
                continue;
            }

            $calculatedValues[] = $date;
        }

        return $calculatedValues;
    }

    private function betweenExclusive($startDate, $endDate)
    {
        $allDates = []; // get from storage
        $calculatedValues = [];

        foreach ($allDates as $index => $date) {
            if ($index <= $startDate || $index >= $endDate) {
                continue;
            }

            $calculatedValues[] = $date;
        }

        return $calculatedValues;
    }

    // ----------------------------------------------------------------------
    public function formatHtml()
    {
        return 'report in html';
    }

    public function formatJson()
    {
        return 'report in json';
    }
}


$salesReport = (new SalesReporter())->inclusive();

$startDate = '';
$endDate = '';
$salesReport->between($startDate, $endDate);