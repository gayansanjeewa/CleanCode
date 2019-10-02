<?php

class CreditPaymentMethod implements PaymentMethodInterface
{
    /**
     * @inheritDoc
     */
    public function acceptPayment(Receipt $receipt)
    {
        // TODO: Accept payment in Credit.
    }
}