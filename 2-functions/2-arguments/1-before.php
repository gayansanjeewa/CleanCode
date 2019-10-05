<?php

class ReportGenerator
{

    // ...

    /**
     * @param int      $userId
     * @param string   $firstName
     * @param string   $lastName
     * @param DateTime $startDate
     * @param DateTime $endEnd
     * @param bool     $salesReport
     *
     * @return Report
     */
    public function generate($userId, $firstName, $lastName, $startDate, $endEnd, $salesReport)
    {
        $reportData = $salesReport
            ? $this->repository->findSalesReportByUser($userId, $startDate, $endEnd)
            : $this->repository->findRenewalReportByUser($userId, $startDate, $endEnd);

        $fullName = $firstName . " " . $lastName;

        return (new Report())
            ->setTitle("Report for user " . $fullName)
            ->setData($reportData);
    }

    // ...
}