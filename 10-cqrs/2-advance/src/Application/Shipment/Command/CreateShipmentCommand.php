<?php

/**
 * @author Nadeesha Dilruwan <eclayaz@gmail.com>
 */
final class CreateShipmentCommand
{
    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $to;

    /**
     * @var DateTimeInterface
     */
    private $date;

    public function __construct($from, $to, DateTimeInterface $date)
    {
        // .. Assets if required

        $this->from = $from;
        $this->to = $to;
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }
}