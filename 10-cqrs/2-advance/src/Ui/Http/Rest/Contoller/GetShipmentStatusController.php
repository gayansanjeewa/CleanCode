<?php

/**
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
final class GetShipmentStatusController
{

    public function invokeAction()
    {
        // ..

        $shipmentId = $request->getQuery('shipment-id');

        // .. do your validations here

        $getShipmentDetailsQuery = new GetShipmentDetailsQuery($shipmentId);

        try {
            $shipmentDetails = $this->tacticianCommandBus($getShipmentDetailsQuery);

            // ... return the response in the required format
        } catch (Exception $exception) {
            // .. returns proper http exception
        }
    }
}