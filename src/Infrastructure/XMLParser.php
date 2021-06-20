<?php

namespace OOProgramming\src\Infrastructure;

use Exception;
use OOProgramming\Parser\FeedParserBase;
use OOProgramming\Parser\ParserInterface;

class XMLParser extends FeedParserBase implements ParserInterface {


    public function parse()
    {
        $this->fileExists();
        $xmlString = file_get_contents($this->_strFeedUrl);
        return simplexml_load_string($xmlString);
    }

    private function fileExists() : void
    {
        if ( !file_exists($this->_strFeedUrl) ) {
            throw new Exception("Invalid file");
        }
    }
}