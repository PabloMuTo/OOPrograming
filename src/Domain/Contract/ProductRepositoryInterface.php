<?php

namespace OOProgramming\src\Domain\Contract;

use OOProgramming\src\Domain\Product as DomainProduct;

interface ProductRepositoryInterface {

    /**
     * Get all products
     */
    public function all();

    /**
     * Get product by name
     */
    public function getByName( string $name ) : ?DomainProduct;
}