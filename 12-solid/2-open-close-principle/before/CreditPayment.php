<?php

class CreditPayment
{

    private $creditAmount;

    /**
     * @param $creditAmount
     */
    public function __construct($creditAmount)
    {
        $this->creditAmount = $creditAmount;
    }

    /**
     * @return float
     */
    public function getCreditAmount()
    {
        return $this->creditAmount;
    }
}