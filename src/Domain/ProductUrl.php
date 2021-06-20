<?php

namespace OOProgramming\src\Domain;

use OOProgramming\src\Domain\Exception\IncorrectProductUrlException;

class ProductUrl {

    private $value;

    public function __construct( $value )
    {
        $this->validate($value);
        $this->value = $value;
    }

    private function validate( $value )
    {
        if ( !$value ) {
        // TODO: Correcte FILTER VALIDATE URL
        // if ( !$value || filter_var($value, FILTER_VALIDATE_URL)) {
            throw new IncorrectProductUrlException();
        }
    }

    public function get()
    {
        return $this->value;
    }
}