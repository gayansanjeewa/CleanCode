<?php

class User
{
    /**
     * @return Account
     */
    public function getAccount()
    {
        //...
    }

    public function discountedPlanPrice($discountCode)
    {
        $coupon = (new Coupon())->create($discountCode);

        // ask and ask again
        return $coupon->discount($this->getAccount()->getPlan()->getPrice());
    }
}

class Account
{
    /**
     * @return Plan
     */
    public function getPlan()
    {
        //...
    }
}

class Plan
{
    /**
     * @return float
     */
    public function getPrice()
    {
        //...
    }
}