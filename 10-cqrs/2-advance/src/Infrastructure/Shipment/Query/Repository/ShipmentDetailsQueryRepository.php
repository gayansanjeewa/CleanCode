<?php

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;

/**
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
class ShipmentDetailsQueryRepository implements ShipmentDetailsQueryRepositoryInterface
{
    /**
     * @var Connection
     */
    private $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @param ShipmentId $shipmentId
     *
     * @return ShipmentDetailsViewModel
     *
     * @throws Exception
     */
    public function get(ShipmentId $shipmentId)
    {
        $queryBuilder = $this->connection->createQueryBuilder();

        $queryBuilder
            ->select('shipments.*')
            ->from('shipments', 'shipments')
            ->andWhere('shipments.id = :id')
            ->setParameter('id', $shipmentId->asString());

        /** @var Statement $statement */
        $statement = $queryBuilder->execute();
        $data = $statement->fetch();

        $viewModel = new ShipmentDetailsViewModel();
        $viewModel->from = $data['from'];
        $viewModel->to = $data['to'];
        $viewModel->date = $data['date'];

        return $viewModel;
    }
}