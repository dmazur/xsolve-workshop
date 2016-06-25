<?php

namespace Domain\Service;

class ProductServiceFactory
{
    /**
     * @return ProductServiceInterface
     */
    public function createService() {
        $productMapper = new \Domain\Mapper\ProductMapper();

        return new ProductService(null, $productMapper);
    }
}
