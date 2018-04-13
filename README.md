# smsa-webservice

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

[SMSAExpress](http://smsaexpress.com/index.html) tracking web service.

# Under development. Don't use for production.

## Install

Via Composer

``` bash
$ composer require alhoqbani/smsa-webservice
```

## Usage

``` php
$smsaApi = new Alhoqbani\SMSA();
echo $smsaApi->echoPhrase('Hello, Samsa!');
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

If you discover any security related issues, please email h.alhoqbani@gmail.com instead of using the issue tracker.

## Credits

- [Hamoud Alhoqbani][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/alhoqbani/smsa-webservice.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/alhoqbani/smsa-webservice/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/alhoqbani/smsa-webservice.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/alhoqbani/smsa-webservice.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/alhoqbani/smsa-webservice.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/alhoqbani/smsa-webservice
[link-travis]: https://travis-ci.org/alhoqbani/smsa-webservice
[link-scrutinizer]: https://scrutinizer-ci.com/g/alhoqbani/smsa-webservice/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/alhoqbani/smsa-webservice
[link-downloads]: https://packagist.org/packages/alhoqbani/smsa-webservice
[link-author]: https://github.com/alhoqbani
[link-contributors]: ../../contributors
