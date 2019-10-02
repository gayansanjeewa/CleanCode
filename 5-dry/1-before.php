<?php

// WET  - Write Every Time
//      - We Enjoy Writing
//      - Waste Everyone's Time
class ReportProcessor
{
    public function log(array $data)
    {
        echo "Start date: " . date("Y/m/d", $data["startDate"]) . "\n";
        echo "End date: " . date("Y/m/d", $data["endDate"]) . "\n";
        echo "Total: " . $data["total"] . "\n";
        echo "Average per day: " . floor($data["total"] / 365) . "\n";
        echo "Average x day: " . floor($data["total"] / 365) . "\n";
        echo "Average x week: " . floor($data["total"] / 52) . "\n";
        echo "Average x month: " . floor($data["total"] / 12) . "\n";
    }

    public function exportToFile(array $data)
    {
        $report = '';
        $report .= "Start date: " . date("Y/m/d", $data["startDate"]) . "\n";
        $report .= "End date: " . date("Y/m/d", $data["endDate"]) . "\n";
        $report .= "Total: " . $data["total"] . "\n";
        $report .= "Average per day: " . floor($data["total"] / 365) . "\n";
        $report .= "Average per week: " . floor($data["total"] / 52) . "\n";
        $report .= "Average per month: " . floor($data["total"] / 12) . "\n";

        file_put_contents("./report.txt", $report);
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
