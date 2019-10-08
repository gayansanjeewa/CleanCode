<?php

/**
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
final class GetShipmentDetailsQueryHandler
{
    /**
     * @var ShipmentDetailsQueryRepositoryInterface
     */
    private $shipmentDetailsQueryRepository;

    /**
     * @param ShipmentDetailsQueryRepositoryInterface $shipmentDetailsQueryRepository
     */
    public function __construct(ShipmentDetailsQueryRepositoryInterface $shipmentDetailsQueryRepository)
    {
        $this->shipmentDetailsQueryRepository = $shipmentDetailsQueryRepository;
    }

    /**
     * @param GetShipmentDetailsQuery $getShipmentDetailsQuery
     *
     * @return ShipmentDetailsViewModel
     */
    public function __invoke(GetShipmentDetailsQuery $getShipmentDetailsQuery)
    {
        return $this->shipmentDetailsQueryRepository->get(
            ShipmentId::fromString($getShipmentDetailsQuery->getShipmentId())
        );
    }
}