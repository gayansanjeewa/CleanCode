<?php

class CashPaymentMethod implements PaymentMethodInterface
{
    /**
     * @inheritDoc
     */
    public function acceptPayment(Receipt $receipt)
    {
        // TODO: Accept payment in Cash.
    }
}