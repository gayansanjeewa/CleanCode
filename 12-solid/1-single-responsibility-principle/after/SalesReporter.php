<?php

namespace after;

use after\Repositories\SalesReporterRepository;

class SalesReporter
{
    /**
     * @var SalesReporterRepository
     */
    private $salesReporterRepository;

    /**
     * @param SalesReporterRepository $salesReporterRepository
     */
    public function __construct(SalesReporterRepository $salesReporterRepository)
    {
        $this->salesReporterRepository = $salesReporterRepository;
    }


    /**
     * @param string $startDate
     * @param string $endDate
     * @param SalesOutputInterface $salesOutput
     * @return mixed
     */
    public function between($startDate, $endDate, SalesOutputInterface $salesOutput)
    {
        $sales = $this->salesReporterRepository->between($startDate, $endDate);

        return $salesOutput->output($sales);
    }
}