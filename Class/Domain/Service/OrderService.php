<?php

namespace Domain\Service;

class OrderService implements OrderServiceInterface
{

    private $priceCalculatorFactory;

    public function __construct(
        \Domain\Strategy\OrderPriceCalculatorStrategyFactory $priceCalculatorFactory
    ) {
        $this->priceCalculatorFactory = $priceCalculatorFactory;
    }

    public function createOrder($items)
    {
        $order = new \Domain\Entity\Order();
        $totalPrice = 0;

        foreach ($items as $item) {
            $priceCalculator = $this->priceCalculatorFactory->getStrategy($item['amount']);

            $totalPrice += $priceCalculator->getPrice($item['price']);
        }

        $order->setUser('todo :D');
        $order->setItems($items);
        $order->setPrice($totalPrice);
    }
}
