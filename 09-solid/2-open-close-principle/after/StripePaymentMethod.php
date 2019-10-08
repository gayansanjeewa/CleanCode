<?php


class StripePaymentMethod implements PaymentMethodInterface
{
    /**
     * @inheritDoc
     */
    public function acceptPayment(Receipt $receipt)
    {
        // TODO: Accept payment via Stripe.
    }
}