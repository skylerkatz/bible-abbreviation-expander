<?php

namespace SkylerKatz\BibleAbbreviationExpander\Test;

use PHPUnit\Framework\TestCase;
use SkylerKatz\BibleAbbreviationExpander\Abbreviation;
use SkylerKatz\BibleAbbreviationExpander\Exceptions\BibleAbbreviationException;

class BibleAbbreviationExpanderTest extends TestCase
{
    /** @test */
    public function itCanFindAnAbbreviation()
    {
        $abbreviation = 'Gen';

        $book = Abbreviation::expand($abbreviation);
        $this->assertEquals('Genesis', $book);
    }

    /** @test */
    public function itThrowsAnErrorIfAnAbbreviationIsNotFound()
    {
        $abbreviation = 'Sky';

        try {
            $book = Abbreviation::expand($abbreviation);
        } catch (BibleAbbreviationException $e) {
            $this->assertEquals(
                "The abbreviation '{$abbreviation}' does not match a book of the Bible",
                $e->getMessage()
            );

            return true;
        }

        $this->fail('An exception should have been thrown, but was not.');
    }
}
