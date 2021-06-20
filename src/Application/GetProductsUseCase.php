<?php

namespace OOProgramming\src\Application;

use OOProgramming\src\Domain\Contract\ProductRepositoryInterface;
use OOProgramming\src\Infrastructure\ProductXMLRepository;

final class GetProductsUseCase {

    private $productXMLRepository;

    /**
     * 
     */
    public function __construct( ProductRepositoryInterface $productRepository )
    {
        $this->productRepository = $productRepository;
    }

    /**
     * 
     */
    public function execute()
    {
        $products = $this->productRepository->all();
        $response = new GetProductsResponse($products);
        return $response();
    }

}