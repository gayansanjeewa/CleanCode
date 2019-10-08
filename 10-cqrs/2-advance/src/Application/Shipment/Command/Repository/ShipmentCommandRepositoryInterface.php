<?php

/**
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
interface ShipmentCommandRepositoryInterface
{
    /**
     * @param ShipmentEntity $entity
     */
    public function create(ShipmentEntity $entity);
}