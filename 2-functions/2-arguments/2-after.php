<?php

final class ReportGenerator
{

    // ...

    public function generateSalesReport(User $user, DateRange $range)
    {
        $reportData = $this->repository->getSalesReportByUser($user->getId(), $range);

        return $report = (new Report())
            ->setTitle("Report for user " . $user->getFullName())
            ->setData($reportData);
    }

    public function generateRenewalReport(User $user, DateRange $range)
    {
        $reportData = $this->repository->getRenewalReportByUser($user->getId(), $range);

        return $report = (new Report())
            ->setTitle("Report for user " . $user->getFullName())
            ->setData($reportData);
    }

    // ...
}