<?php

/**
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 *
 * @method tacticianCommandBus($command)
 */
final class CreateShipmentController
{
    /**
     * @return Response
     */
    public function invokeAction()
    {
        // ...

        $data = $this->getRequest()->getContent();

        // ...

        $createShipmentCommand = new CreateShipmentCommand(
            $data['from'],
            $data['to'],
            $data['date']
        );

        try {
            $this->tacticianCommandBus($createShipmentCommand);

            return $this->successResponse();
        } catch (Exception $exception) {
            // .. returns proper http exception
        }
    }
}