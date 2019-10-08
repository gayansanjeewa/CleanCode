<?php

/**
 * This is an example of CQS - command query separation
 *
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
final class Shipment
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
     * @param string $shipmentId
     */
    public function __construct($shipmentId)
    {
        // Load current state
    }

    /**
     * This method mutates the delivery state
     *
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

    /**
     * This method returns the delivery state
     *
     * @return bool
     */
    public function isDelivered()
    {
        return $this->delivery !== null;
    }
}