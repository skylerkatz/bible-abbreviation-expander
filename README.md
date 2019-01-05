# Bible Abbreviation Expander

Expand a book of the Bible's abbreviation to its full name.

## Install

Via Composer

``` bash
$ composer require skylerkatz/bible-abbreviation-expander
```

## Usage

```php
use SkylerKatz\BibleAbbreviationExpander\Abbreviation;
$abbreviation = 'Gen';
$book = Abbreviation::expand($abbreviation);
echo $book; // 'Genesis'
```

## Testing

``` bash
$ composer test
```

## Credits

- [Skyler Katz][https://github.com/skylerkatz]

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
