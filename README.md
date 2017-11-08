# wwt-simple-upload

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A (really easy to use) uploader for WorldWideTorrents written in PHP.

## Structure

```
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require pxgamer/wwt-simple-upload
```

## Usage

```php
use pxgamer\WorldWideTorrents\Uploader;

const API_KEY = '';

$content = [
    'name' => '',                       // The uploaded torrent's title
    'torrent_file' => 'C:\a.torrent',   // The full path to the torrent file
    'category_id' => 39,                // The category ID
];

$data = Uploader::upload(API_KEY, $content);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email owzie123@gmail.com instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/wwt-simple-upload.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/wwt-simple-upload/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/78620300/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/wwt-simple-upload.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/wwt-simple-upload.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/wwt-simple-upload
[link-travis]: https://travis-ci.org/pxgamer/wwt-simple-upload
[link-styleci]: https://styleci.io/repos/78620300
[link-code-quality]: https://codecov.io/gh/pxgamer/wwt-simple-upload
[link-downloads]: https://packagist.org/packages/pxgamer/wwt-simple-upload
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
