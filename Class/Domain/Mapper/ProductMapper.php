<?php

namespace Domain\Mapper;

class ProductMapper implements ProductMapperInterface
{

    public function getAll()
    {
        $mockArray =  [
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
        $products = [];

        foreach ($mockArray as $data) {
            $product = new \Domain\Entity\Product();
            $product->hydrate($data);
            $products[] = $product;
        }

        return $products;
    }

}
