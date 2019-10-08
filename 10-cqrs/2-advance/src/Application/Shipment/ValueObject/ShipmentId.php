<?php

/**
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
final class ShipmentId
{
    /**
     * @var string
     */
    private $id;

    private function __construct()
    {
    }

    /**
     * @param string $id
     *
     * @return static
     */
    public static function fromString($id)
    {
        Assert::notEmpty($id);
        Assert::uuid($id);

        $aggregateId = new static();
        $aggregateId->id = $id;

        return $aggregateId;
    }

    /**
     * @return string
     */
    public function asString()
    {
        return $this->__toString();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->id;
    }
}