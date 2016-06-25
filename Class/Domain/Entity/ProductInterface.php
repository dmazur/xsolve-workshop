<?php

namespace Domain\Entity;

interface ProductInterface
{
    function getName();

    function getDesc();

    function getSku();

    function getPrice();

    function getAmount();

    function setName($name);

    function setDesc($desc);

    function setSku($sku);

    function setPrice($price);

    function setAmount($amount);
}
