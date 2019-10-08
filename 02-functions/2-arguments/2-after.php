<?php

class ReportGenerator
{

    // ...

    /**
     * @param User      $user
     * @param DateRange $range
     *
     * @return Report
     */
    public function generateSalesReport(User $user, DateRange $range)
    {
        $reportData = $this->repository->findSalesReportByUser($user->getId(), $range);

        return $report = (new Report())
            ->setTitle("Report for user " . $user->getFullName())
            ->setData($reportData);
    }

    /**
     * @param User      $user
     * @param DateRange $range
     *
     * @return Report
     */
    public function generateRenewalReport(User $user, DateRange $range)
    {
        $reportData = $this->repository->findRenewalReportByUser($user->getId(), $range);

        return $report = (new Report())
            ->setTitle("Report for user " . $user->getFullName())
            ->setData($reportData);
    }

    // ...
}