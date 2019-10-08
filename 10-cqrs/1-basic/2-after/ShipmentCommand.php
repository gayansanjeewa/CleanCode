<?php

/**
 * This class is ONLY responsible to mutates the delivery state
 *
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
final class ShipmentCommand
{
    /**
     * @var DateTime
     */
    private $delivery;

    /**
     * @var string
     */
    private $proofOfDelivery;

    /**
     * @param string|UUID $shipmentId
     */
    public function __construct($shipmentId)
    {
        // Load current state
    }

    /**
     * @param DateTime $delivery
     * @param string $proofOfDelivery
     */
    public function deliver(DateTime $delivery, $proofOfDelivery)
    {
        if ($delivery !== null)
        {
            throw new InvalidOperationException("Already delivered.");
        }

        $this->delivery = $delivery;
        $this->proofOfDelivery = $proofOfDelivery;
    }
}