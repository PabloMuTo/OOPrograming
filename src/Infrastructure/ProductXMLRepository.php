<?php

namespace OOProgramming\src\Infrastructure;

use OOProgramming\Parser\ParserInterface;
use OOProgramming\src\Domain\Contract\ProductRepositoryInterface;
use OOProgramming\src\Domain\Product;
use OOProgramming\src\Infrastructure\DataMapper\ProductXMLDataMapper;

class ProductXMLRepository implements ProductRepositoryInterface {

    private $parser;

    public function __construct( ParserInterface $parser )
    {
        $this->parser = $parser;
    }

    public function all()
    {
        $products = (array)$this->parser->parse();
        return array_map(function($product) {
            return ProductXMLDataMapper::toEntity((array)$product);
        }, $products['item']);
    }


    public function getByName( string $name ) : ?Product
    {
        // TODO
        return null;
    }
    
}