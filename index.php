<?php

use OOProgramming\src\Application\GetProductsUseCase;
use OOProgramming\src\Infrastructure\ProductXMLRepository;
use OOProgramming\src\Infrastructure\XMLParser;

require 'bootstrap.php';

/**
 * You can start writing code here. Please do not change any skeleton classes.
 * You can create as many files and folders and namespaces as you need
 */

$xmlFile = 'products.xml';
$parser = new XMLParser($xmlFile);
$productXmlRepository = new ProductXMLRepository($parser);
$useCase = new GetProductsUseCase($productXmlRepository);

$result = $useCase->execute();

// Presentation:
foreach ( $result as $line ) {
    echo "\n";
    echo $line['title']."\n";
    echo $line['link']."\n";
    echo $line['date']."\n";
}

