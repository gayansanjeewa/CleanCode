<?php

class Receipt
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $amount;

    /**
     * @param string $type
     * @param float $amount
     */
    public function __construct($type, $amount)
    {
        $this->type = $type;
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

}