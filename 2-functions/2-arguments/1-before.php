<?php

final class ReportGenerator
{

    // ...

    public function generate($userId, $firstName, $lastName, $startDate, $endEnd, $salesReport)
    {
        $reportData = $salesReport
            ? $this->repository->getSalesReportByUser($userId, $startDate, $endEnd)
            : $this->repository->getRenewalReportByUser($userId, $startDate, $endEnd);

        $fullName = $firstName . " " . $lastName;

        return (new Report())
            ->setTitle("Report for user " . $fullName)
            ->setData($reportData);
    }

    // ...
}