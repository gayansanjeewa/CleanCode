<?php

// DRY - Don't Repeat Yourself
class ReportProcessor
{
    /**
     * @param array $salesData
     */
    public function log(array $salesData)
    {
        echo $this->createReport($salesData);
    }

    /**
     * @param array $salesData
     */
    public function exportToFile(array $salesData)
    {
        file_put_contents("./report.txt", $this->createReport($salesData));
    }

    /**
     * @param array $data
     *
     * @return string
     */
    private function createReport(array $data)
    {
        $report = '';
        $report .= "Start date: " . $this->formatDate($data["startDate"]) . "\n";
        $report .= "End date: " . $this->formatDate($data["endDate"]) . "\n";
        $report .= "Total: " . $data["total"] . "\n";
        $report .= "Average x day: " . $this->average($data["total"], 365) . "\n";
        $report .= "Average x week: " . $this->average($data["total"], 52) . "\n";
        $report .= "Average x month: " . $this->average($data["total"], 12) . "\n";
        return $report;
    }

    /**
     * @param $date
     *
     * @return false|string
     */
    private function formatDate($date)
    {
        return date("Y/m/d", $date);
    }

    /**
     * @param float $value
     * @param int $period
     *
     * @return float
     */
    private function average($value, $period)
    {
        return floor($value / $period);
    }
}

$salesData = [
    "startDate" => '2019-10-01',
    "endDate" => '2019-10-05',
    "total" => '10000000'
];

// Print the sales data in the console
(new ReportProcessor())->log($salesData);

// Extract the sales data into a file
(new ReportProcessor())->exportToFile($salesData);
