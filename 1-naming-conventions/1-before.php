<?php

class GenarateSalesReportsBetweenDates
{
    private $i;

    public function getReport($date1, $date2)
    {
        $data = []; // get all the dates from storage
        $values = [];

        if ($this->getIncluded()) {
            foreach ($data as $k => $v) {
                // ...
            }
        } else {
            // ...
        }

        return $values;
    }

    public function setDateIsIncluded($flag)
    {
        $this->i = $flag;
    }

    private function getIncluded()
    {
        return $this->i;
    }


}


$salesReport = new GenarateSalesReportsBetweenDates();
$salesReport->setDateIsIncluded(true);

$date1 = '';
$date2 = '';
$salesReport->getReport($date1, $date2);