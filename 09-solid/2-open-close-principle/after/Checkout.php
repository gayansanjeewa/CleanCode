<?php

class Checkout
{
    /**
     * @param Receipt $receipt
     * @param PaymentMethodInterface $paymentMethod
     */
    public function begin(Receipt $receipt, PaymentMethodInterface $paymentMethod)
    {
        $paymentMethod->acceptPayment($receipt);
    }
}
