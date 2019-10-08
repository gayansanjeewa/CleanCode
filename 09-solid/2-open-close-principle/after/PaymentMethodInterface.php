<?php

// "Separate extensible behaviour behind an interface and flip the dependencies" - Uncle Bob
interface PaymentMethodInterface
{
    /**
     * @param Receipt $receipt
     */
    public function acceptPayment(Receipt $receipt);
}