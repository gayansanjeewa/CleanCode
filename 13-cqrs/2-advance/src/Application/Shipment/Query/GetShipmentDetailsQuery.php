<?php

use Webmozart\Assert\Assert;

/**
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
final class GetShipmentDetailsQuery
{
    /**
     * @var string
     */
    private $shipmentId;

    /**
     * @param string $shipmentId
     */
    public function __construct($shipmentId)
    {
        //.. perform asserts

        $this->shipmentId = $shipmentId;
    }

    /**
     * @return string
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }
}