<?php

namespace Domain\Strategy;

interface OrderPriceCalculatorStrategyInterface
{
    public function getPrice($price);
}
