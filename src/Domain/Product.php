<?php

namespace OOProgramming\src\Domain;


class Product {

    private $title;
    private $url;
    private $date;

    private function __construct(
        ProductTitle $title,
        ProductUrl $url,
        ProductPublicationDate $date
    )
    {
        $this->title = $title;
        $this->url = $url;
        $this->date = $date;
    }

    public static function create(
        ProductTitle $title,
        ProductUrl $url,
        ProductPublicationDate $date
    ) : self {

        return new self($title, $url, $date);
    }

    public function title() : ProductTitle
    {
        return $this->title;
    }

    public function url() : ProductUrl
    {
        return $this->url;
    }

    public function date() : ProductPublicationDate
    {
        return $this->date;
    }

}