<?php

namespace SkylerKatz\BibleAbbreviationExpander\Exceptions;

use Exception;

class BibleAbbreviationException extends Exception
{
    public function __construct($abbreviation)
    {
        parent::__construct("The abbreviation '{$abbreviation}' does not match a book of the Bible");
    }
}
