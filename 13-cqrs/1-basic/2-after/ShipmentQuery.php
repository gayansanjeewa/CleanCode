<?php

/**
 * This class is only responsible to return the delivery state
 *
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
final class ShipmentQuery
{
    /**
     * @var DateTime
     */
    private $delivery;

    /**
     * @param string|UUID $shipmentId
     */
    public function __construct($shipmentId)
    {
        // Load current state
    }

    /**
     * @return bool
     */
    public function isDelivered()
    {
        return $this->delivery !== null;
    }
}