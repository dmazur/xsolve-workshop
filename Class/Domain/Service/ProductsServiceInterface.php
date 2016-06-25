<?php

namespace Domain\Service;

interface ProductsServiceInterface
{
    /**
     * @return array|Product[]
     */
    public function listAll();
}
