<?php

//// use case 1

class Checkout
{
    /**
     * @param Receipt $receipt
     */
    public function begin(Receipt $receipt)
    {
        $this->acceptCash($receipt);
    }

    /**
     * @param Receipt $receipt
     */
    private function acceptCash(Receipt $receipt)
    {
        // TODO: Accept payment in Cash.
    }
}

//// use case 2

//class Checkout
//{
//    /**
//     * @param Receipt $receipt
//     */
//    public function begin(Receipt $receipt)
//    {
//        if ($receipt->getType() === 'CashPayment') {
//            $this->acceptCash($receipt);
//        } else {
//            $this->acceptCredit($receipt);
//        }
//    }
//
//    /**
//     * @param Receipt $receipt
//     */
//    private function acceptCash(Receipt $receipt)
//    {
//        // TODO: Accept payment in Cash.
//    }
//
//    /**
//     * @param Receipt $receipt
//     */
//    private function acceptCredit(Receipt $receipt)
//    {
//        // TODO: Accept payment in Credit.
//    }
//}

//// use case 3

//class Checkout
//{
//    /**
//     * @param Receipt $receipt
//     */
//    public function begin(Receipt $receipt)
//    {
//        if ($receipt->getType() === 'CashPayment') {
//            $this->acceptCash($receipt);
//        }
//
//        if ($receipt->getType() === 'CreditPayment'){
//            $this->acceptCredit($receipt);
//        }
//
//        if ($receipt->getType() === 'StripePayment'){
//            // !?
//        }
//    }
//
//    /**
//     * @param Receipt $receipt
//     */
//    private function acceptCash(Receipt $receipt)
//    {
//        // TODO: Accept payment in Cash.
//    }
//
//    /**
//     * @param Receipt $receipt
//     */
//    private function acceptCredit(Receipt $receipt)
//    {
//        // TODO: Accept payment in Credit.
//    }
//}