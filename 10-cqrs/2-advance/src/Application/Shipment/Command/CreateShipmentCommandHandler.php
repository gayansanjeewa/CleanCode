<?php

/**
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
final class CreateShipmentCommandHandler
{
    /**
     * @var ShipmentCommandRepositoryInterface
     */
    private $shipmentCommandRepository;

    /**
     * @param ShipmentCommandRepositoryInterface $shipmentCommandRepository
     */
    public function __construct(ShipmentCommandRepositoryInterface $shipmentCommandRepository)
    {
        $this->shipmentCommandRepository = $shipmentCommandRepository;
    }

    /**
     * @param CreateShipmentCommand $createShipmentCommand
     */
    public function __invoke(CreateShipmentCommand $createShipmentCommand)
    {
        $shipmentEntity = new ShipmentEntity();
        $shipmentEntity->setFrom($createShipmentCommand->getFrom());
        $shipmentEntity->setTo($createShipmentCommand->getTo());
        $shipmentEntity->setDate($createShipmentCommand->getDate());

        $this->shipmentCommandRepository->create($shipmentEntity);
    }
}