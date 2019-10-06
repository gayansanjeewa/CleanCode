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
        // delegate|tell
        return $this->getAccount()->discountPlanPrice($discountCode);
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

    public function discountPlanPrice($discountCode)
    {
        $coupon = (new Coupon())->create($discountCode);

        return $coupon->discount($this->getPlan()->getPrice());
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