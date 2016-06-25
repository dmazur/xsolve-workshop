<?php

namespace Domain\Entity;

class Product implements ProductInterface, HydratorAwareInterface
{
    private $name;
    private $desc;
    private $sku;
    private $price;
    private $amount;

    function getName()
    {
        return $this->name;
    }

    function getDesc()
    {
        return $this->desc;
    }

    function getSku()
    {
        return $this->sku;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getAmount()
    {
        return $this->amount;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function setDesc($desc)
    {
        $this->desc = $desc;
    }

    function setSku($sku)
    {
        $this->sku = $sku;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function hydrate(array $data)
    {
        $this->name = $data['name'];
        $this->desc = $data['desc'];
        $this->sku = $data['sku'];
        $this->price = $data['price'];
        $this->amount = $data['amount'];
    }

    public function extract()
    {
        return [
            'name' => $this->name,
            'desc' => $this->desc,
            'sku' => $this->sku,
            'price' => $this->price,
            'amount' => $this->amoun
        ];
    }
}
