<?php

namespace Domain\Service;

class ProductServiceFactory
{
    /**
     * @return ProductServiceInterface
     */
    public function createService() {
        return new ProductService(null, null);
    }
}
