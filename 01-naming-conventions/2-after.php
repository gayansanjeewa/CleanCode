<?php

class SalesReporter
{
    private $include;

    public function between($startDate, $endDate)
    {
        $allDates = [];
        $calculatedValues = [];

        if ($this->isInclusive()) {
            foreach ($allDates as $index => $date) {
                // ...
            }
        } else {
            // ...
        }

        return $calculatedValues;
    }

    public function inclusive()
    {
        $this->include = true;
        return $this;
    }


    public function exclusive()
    {
        $this->include = false;
        return $this;
    }

    private function isInclusive()
    {
        return $this->include;
    }

}

$salesReport = (new SalesReporter())->inclusive();

$startDate = '';
$endDate = '';
$salesReport->between($startDate, $endDate);