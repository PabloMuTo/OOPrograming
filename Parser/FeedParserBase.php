<?php

namespace OOProgramming\Parser;

abstract class FeedParserBase
{

    protected $_strFeedUrl;

    public function __construct($strFeedUrl)
    {
        $this->_strFeedUrl = $strFeedUrl;
    }

    public function getFeedUrl()
    {
        return $this->_strFeedUrl;
    }

    abstract function parse();
}
