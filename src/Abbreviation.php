<?php

namespace SkylerKatz\BibleAbbreviationExpander;

use SkylerKatz\BibleAbbreviationExpander\Exceptions\BibleAbbreviationException;

class Abbreviation
{
    /**
     * Expand an abbreviation to the book of the Bible.
     *
     * @param string $abbreviation
     *
     * @throws BibleAbbreviationException
     *
     * @return string
     */
    public static function expand($abbreviation)
    {
        if (array_key_exists($abbreviation, Bible::books())) {
            return Bible::books()[$abbreviation];
        }

        throw new BibleAbbreviationException($abbreviation);
    }
}
