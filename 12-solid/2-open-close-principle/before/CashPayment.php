<?php

class CashPayment
{

    private $cashAmount;

    /**
     * @param $cashAmount
     */
    public function __construct($cashAmount)
    {
        $this->cashAmount = $cashAmount;
    }

    /**
     * @return float
     */
    public function getCreditAmount()
    {
        return $this->cashAmount;
    }
}