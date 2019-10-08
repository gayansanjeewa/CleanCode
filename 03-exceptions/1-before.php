<?php

final class GetReportHandler
{
    // ...

    /**
     * @param int|null $reportId
     *
     * @return array
     */
    public function get($reportId)
    {
        /*
         * DON'T PASS NULL
         *
         * method $reportId possibly could be null, which is a bad practice
         */
        if ($reportId === null) {
            return [];
        }


        /*
         * DON'T RETURN NULL
         *
         * method getByReportId() possibly returns NULL, which is a bad practice
         */
        $reportData = $this->reportGenerator->getByReportId($reportId);

        if ($reportData === null) {
            return [];
        }

        $processedReportData = [];

        // Do some process on the $reportData
        foreach ($reportData as $reportDatItem) {
            $processedReportData[] = $reportDatItem->salesFigures();
        }

        return $processedReportData;
    }

    // ...
}

final class ReportPrinter
{
    /**
     * @var Logger
     */
    private $logger;

    /**
     * @var Printer
     */
    private $printer;

    /**
     * This method already violates SRP, but this is only for demo purpose
     *
     * @param array $report
     *
     * @return bool
     */
    public function printReport(array $report)
    {
        if ($this->printer->status() !== Printer::OFFLINE) {
            $this->logger->log("The printer is office : " + $this->printer->getId());
            return false;
        }

        $this->printer->connectToPrinterNetwork();

        if ($this->printer->connectionFailed()) {
            $this->logger->log("The printer failed to connect to the network : " + $this->printer->getId());
            return false;
        }

        $success = $this->printer->loadPrintJob($report);

        if (!$success) {
            $this->logger->log("The printer failed load the print data : " + $this->printer->getId());
            return false;
        }

        $this->printer->print();
        $this->logger->log("Print data successfully printed : " + $this->printer->getId());

        return true;
    }

    // ...
}


final class PrintReportController
{
    /**
     * @var GetReportHandler
     */
    private $reportHandler;

    /**
     * @var ReportPrinter
     */
    private $reportPrinter;

    public function printAction($reportId)
    {
        $reportData = $this->reportHandler->get($reportId);

        return $this->reportPrinter->printReport($reportData);
    }
}

/** @var PrintReportController $controller */
$controller = resolve(PrintReportController::class);

$controller->printAction(1);

$controller->printAction(null);