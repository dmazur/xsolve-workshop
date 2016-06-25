<?php

namespace Domain\Strategy;

class NormalOrderPriceCalculator implements \OrderPriceCalculatorStrategyInterface
{
    public function getPrice($price)
    {
        return $price;
    }

}
