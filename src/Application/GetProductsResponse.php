<?php

namespace OOProgramming\src\Application;

final class GetProductsResponse {

    private $products;

    public function __construct( $products )
    {
        $this->products = $products;
    }

    public function __invoke()
    {
        return array_map(function($product){

            return [
                'title' => $product->title()->get(),
                'link'  => $product->url()->get(),
                'date'  => $product->date()->toIso8601Format()
            ];
        }, $this->products);
    }
}