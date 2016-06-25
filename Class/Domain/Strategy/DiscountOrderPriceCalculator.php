<?php

namespace Domain\Strategy;

class DiscountOrderPriceCalculator implements \OrderPriceCalculatorStrategyInterface
{
    private $discountPct;

    public function __construct($discountPct)
    {
        $this->discountPct = $discountPct;
    }

    public function getPrice($price)
    {
        return $price * ((100 - $discountPct) / 100);
    }

}
