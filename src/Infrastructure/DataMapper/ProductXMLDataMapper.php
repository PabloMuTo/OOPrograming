<?php

namespace OOProgramming\src\Infrastructure\DataMapper;


use OOProgramming\src\Domain\Product;
use OOProgramming\src\Domain\ProductPublicationDate;
use OOProgramming\src\Domain\ProductTitle;
use OOProgramming\src\Domain\ProductUrl;

final class ProductXMLDataMapper {

    public static function toEntity( $product ) : Product
    {
        return Product::create(
            new ProductTitle($product['title']),
            new ProductUrl($product['link']),
            ProductPublicationDate::createFromString($product['pubDate'])
        );
    }
    

    public static function toArray() : array
    {
        // TODO
        return [];
    }
}