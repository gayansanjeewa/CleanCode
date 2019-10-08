<?php

/**
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
interface ShipmentDetailsQueryRepositoryInterface
{
    /**
     * @param ShipmentId $shipmentId
     *
     * @return ShipmentDetailsViewModel
     */
    public function get(ShipmentId $shipmentId);
}