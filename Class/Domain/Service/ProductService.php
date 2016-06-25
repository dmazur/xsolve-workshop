<?php

namespace Domain\Service;

class ProductService implements ProductsServiceInterface
{

    private $productComposite;

    private $productMapper;

    public function __construct(
        $productComposite,
        \Domain\Mapper\ProductMapperInterface $productMapper
    ) {
        $this->productComposite = $productComposite;
        $this->productMapper = $productMapper;
    }

    public function listAll()
    {
        $productList = $this->productMapper->getAll();
        $productAssoc = [];

        foreach ($productList as $product) {
            $productAssoc[] = $product->extract();
        }

        return $productAssoc;
    }
}
