<?php

namespace Domain\Strategy;

class OrderPriceCalculatorStrategyFactory
{
    public function getStrategy($amount) {
        if ($amount === 1) {
            return new NormalOrderPriceCalculator();
        } else if ($amount === 2) {
            return new DiscountOrderPriceCalculator(5);
        } else if ($amount === 4) {
            return new DiscountOrderPriceCalculator(10);
        } else if ($amount === 3) {
            return new NormalOrderPriceCalculator();
        }
    }
}
