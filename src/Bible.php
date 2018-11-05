<?php

namespace SkylerKatz\BibleAbbreviationExpander;

class Bible
{
    /**
     * An array of books of the bible where
     * the key is an abbreviation and the value
     * is a book of the Bible.
     *
     * @return array
     */
    public static function books()
    {
        return [
            // Genesis
            'Gen' => 'Genesis',
            'Ge'  => 'Genesis',

            // Exodus
            'Exod'=> 'Exodus',
            'Ex'  => 'Exodus',
            'Exo' => 'Exodus',

            // Leviticus
            'Lev' => 'Leviticus',

            // Numbers
            'Num' => 'Numbers',

            // Deuteronomy
            'Deut' => 'Deuteronomy',
            'Deu'  => 'Deuteronomy',

            // Joshua
            'Josh' => 'Joshua',

            // Judges
            'Judg' => 'Judges',
            'Jdgs' => 'Judges',

            // Ruth
            'Ruth' => 'Ruth',

            // 1 Samuel
            '1Sm'       => '1 Samuel',
            '1 Sam'     => '1 Samuel',
            '1st Sam'   => '1 Samuel',
            '1st Samuel'=> '1 Samuel',

            // 2 Samuel
            '2Sm'       => '2 Samuel',
            '2 Sam'     => '2 Samuel',
            '2nd Sam'   => '2 Samuel',
            '2nd Samuel'=> '2 Samuel',

            // 1 Kings
            '1Ki'      => '1 Kings',
            '1 Kgs'    => '1 Kings',
            '1st Kgs'  => '1 Kings',
            '1st Kings'=> '1 Kings',

            // 2 Kings
            '2Ki'       => '2 Kings',
            '2 Kgs'     => '2 Kings',
            '2nd Kgs'   => '2 Kings',
            '2nd Kings' => '2 Kings',

            // 1 Chronicles
            '1Chr'           => '1 Chronicles',
            '1 Chr'          => '1 Chronicles',
            '1st Chr'        => '1 Chronicles',
            '1st Chronicles' => '1 Chronicles',

            // 2 Chronicles
            '2Chr'          => '2 Chronicles',
            '2 Chr'         => '2 Chronicles',
            '2nd Chr'       => '2 Chronicles',
            '2nd Chronicles'=> '2 Chronicles',

            // Ezra
            'Ezra' => 'Ezra',

            // Nehemiah
            'Neh' => 'Nehemiah',

            // Esther
            'Esth' => 'Esther',
            'Est'  => 'Esther',

            // Job
            'Job' => 'Job',

            // Psalms
            'Ps'   => 'Psalms',
            'Psa'  => 'Psalms',
            'Psalm'=> 'Psalms',

            // Proverbs
            'Prov'=> 'Proverbs',
            'Prv' => 'Proverbs',
            'Pro' => 'Proverbs',

            // Ecclesiastes
            'Eccl' => 'Ecclesiastes',
            'Ecc'  => 'Ecclesiastes',

            // Song of Solomon
            'SSol'         => 'Song of Solomon',
            'Song'         => 'Song of Solomon',
            'Song of Songs'=> 'Song of Solomon',

            // Isaiah
            'Isa' => 'Isaiah',

            // Jeremiah
            'Jer' => 'Jeremiah',

            // Lamentations
            'Lam' => 'Lamentations',

            // Ezekiel
            'Eze'  => 'Ezekiel',
            'Ezek' => 'Ezekiel',

            // Daniel
            'Dan' => 'Daniel',

            // Hosea
            'Hos' => 'Hosea',

            // Joel
            'Joel' => 'Joel',

            // Amos
            'Amos' => 'Amos',

            // Obadiah
            'Obad' => 'Obadiah',
            'Oba'  => 'Obadiah',

            // Jonah
            'Jon'   => 'Jonah',
            'Jonah' => 'Jonah',

            // Micah
            'Mic' => 'Micah',

            // Nahum
            'Nah'   => 'Nahum',
            'Nahum' => 'Nahum',

            // Habakkuk
            'Hab' => 'Habakkuk',

            // Zephaniah
            'Zep'  => 'Zephaniah',
            'Zeph' => 'Zephaniah',

            // Haggai
            'Hag' => 'Haggai',

            // Zechariah
            'Zec'  => 'Zechariah',
            'Zech' => 'Zechariah',

            // Malachi
            'Mal' => 'Malachi',

            // Matthew
            'Mat'  => 'Matthew',
            'Matt' => 'Matthew',

            // Mark
            'Mark' => 'Mark',

            // Luke
            'Luke' => 'Luke',

            // John
            'John' => 'John',

            // Acts
            'Acts' => 'Acts',

            // Romans
            'Rom' => 'Romans',

            // 1 Corinthians
            '1Cor'           => '1 Corinthians',
            '1 Cor'          => '1 Corinthians',
            '1st Cor'        => '1 Corinthians',
            '1st Corinthians'=> '1 Corinthians',

            // 2 Corinthians
            '2Cor'           => '2 Corinthians',
            '2 Cor'          => '2 Corinthians',
            '2nd Cor'        => '2 Corinthians',
            '2nd Corinthians'=> '2 Corinthians',

            // Galatians
            'Gal' => 'Galatians',

            // Ephesians
            'Eph' => 'Ephesians',

            // Philippians
            'Phil' => 'Philippians',

            // Colossians
            'Col' => 'Colossians',

            // 1 Thessalonians
            '1Th'              => '1 Thessalonians',
            '1 Thess'          => '1 Thessalonians',
            '1st Thess'        => '1 Thessalonians',
            '1st Thessalonians'=> '1 Thessalonians',

            // 2 Thessalonians
            '2Th'              => '2 Thessalonians',
            '2 Thess'          => '2 Thessalonians',
            '2nd Thess'        => '2 Thessalonians',
            '2nd Thessalonians'=> '2 Thessalonians',

            // 1 Timothy
            '1Tim'       => '1 Timothy',
            '1 Tim'      => '1 Timothy',
            '1st Tim'    => '1 Timothy',
            '1st Timothy'=> '1 Timothy',

            // 2 Timothy
            '2Tim'       => '2 Timothy',
            '2 Tim'      => '2 Timothy',
            '2nd Tim'    => '2 Timothy',
            '2nd Timothy'=> '2 Timothy',

            // Titus
            'Titus' => 'Titus',

            // Philemon
            'Phmn' => 'Philemon',
            'Phlm' => 'Philemon',

            // Hebrews
            'Heb' => 'Hebrews',

            // James
            'Jas' => 'James',

            // 1 Peter
            '1Pet'     => '1 Peter',
            '1 Pet'    => '1 Peter',
            '1st Pet'  => '1 Peter',
            '1st Peter'=> '1 Peter',

            // 2 Peter
            '2Pet'     => '2 Peter',
            '2 Pet'    => '2 Peter',
            '2nd Pet'  => '2 Peter',
            '2nd Peter'=> '2 Peter',

            // 1 John
            '1Jn'      => '1 John',
            '1st John' => '1 John',

            // 2 John
            '2Jn'      => '2 John',
            '2nd John' => '2 John',

            // 3 John
            '3Jn'      => '3 John',
            '3rd John' => '3 John',

            // Jude
            'Jude' => 'Jude',

            // Revelation
            'Rev' => 'Revelation',
        ];
    }
}
