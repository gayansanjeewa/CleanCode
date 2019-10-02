<?php

final class PrintFailedException extends \Exception
{
}

final class GetReportHandler
{
    // ...

    /**
     * @param int|null $reportId
     *
     * @return array
     * @throws InvalidArgumentException
     */
    public function get($reportId)
    {
        if ($reportId === null) {
            throw new InvalidArgumentException("Repord id can never be empty, and needs to have a value");
        }

        /*
         * Try-catch only for the scope and not for the full code
         */
        try {
            $reportData = $this->reportGenerator->getByReportId($reportId);
        } catch (ReportNotFoundException $exception) {
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
     * @throws PrintFailedException
     */
    public function printReport(array $report)
    {

        try {
            /*
             * Each below methods should throw relevant exceptions
             *
             * In this case, the goal is to log the exception message, if each exception
             * needs to be handled separately, catch each exception and perform needed action
             */
            $this->printer->connectToPrinterNetwork();
            $this->printer->loadPrintJob($report);

            $this->printer->print();
        } catch (Exception $exception) {
            $this->logger->log($exception->getMessage());

            throw new PrintFailedException($exception);
        }
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

        $this->reportPrinter->printReport($reportData);
    }
}

/** @var PrintReportController $controller */
$controller = resolve(PrintReportController::class);

$controller->printAction(1); // will receive a PrintFailedException if the print job fails

$controller->printAction(null); // will receive an InvalidArgumentException with the correct message