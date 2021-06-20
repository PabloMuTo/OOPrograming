<?php

namespace OOProgramming\src\Domain;

use OOProgramming\src\Domain\Exception\IncorrectProductTitleException;

class ProductTitle {

    private $value;

    public function __construct( $value )
    {
        $this->validate($value);
        $this->value = $value;
    }

    private function validate( $value )
    {
        if ( !$value ) {
            throw new IncorrectProductTitleException();
        }
    }


    public function get()
    {
        return $this->value;
    }
}