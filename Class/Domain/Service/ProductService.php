<?php

namespace Domain\Service;

class ProductService implements ProductsServiceInterface
{

    private $productComposite;

    private $productMapper;

    public function __construct(
        $productComposite,
        $productMapper
    ) {
        $this->productComposite = $productComposite;
        $this->productMapper = $productMapper;
    }

    public function listAll()
    {
        return [
            [
                'name' => 'Prod1',
                'desc' => 'Prod1 desc',
                'sku' => '123456',
                'price' => 1000,
                'amount' => 12
            ],
            [
                'name' => 'Prod2',
                'desc' => 'Prod2 desc',
                'sku' => '123567',
                'price' => 2000,
                'amount' => 13
            ],
            [
                'name' => 'Prod3',
                'desc' => 'Prod3 desc',
                'sku' => '123123',
                'price' => 12000,
                'amount' => 100
            ],
            [
                'name' => 'Prod4',
                'desc' => 'Prod4 desc',
                'sku' => '234512',
                'price' => 10000,
                'amount' => 129
            ],
        ];
    }


}
