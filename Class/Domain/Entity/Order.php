<?php

namespace Domain\Entity;

class Order
{
    private $user;
    private $items;
    private $price;

    function getUser()
    {
        return $this->user;
    }

    function getItems()
    {
        return $this->items;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setUser($user)
    {
        $this->user = $user;
    }

    function setItems($items)
    {
        $this->items = $items;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }


}
