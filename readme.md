# GhanaPhoneNumberValidator

A Laravel Package To Validate A Ghana Phone Number and Also Return the network the phone number belongs to.

## Installation

Via Composer

``` bash
$ composer require ambrosethebuild/ghanaphonenumbervalidator
```

If you do not run Laravel 5.5 (or higher), then add the service provider in config/app.php:


``` bash
AmbroseTheBuild\GhanaPhoneNumberValidator\GhanaPhoneNumberValidatorServiceProvider::class
```

## Usage

``` bash

use AmbroseTheBuild\GhanaPhoneNumberValidator\GhanaPhoneNumberValidator;


class ViewController extends Controller
{
    //

    public function ghana_phone_validator( Request $request ){
        
        //method takes phone number
        return GhanaPhoneNumberValidator::isValidGhanaNumber( $request->number );
        return GhanaPhoneNumberValidator::whichNetwork( $request->number );

    }


}

```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [author name][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/ambrosethebuild/ghanaphonenumbervalidator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/ambrosethebuild/ghanaphonenumbervalidator.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/ambrosethebuild/ghanaphonenumbervalidator/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/ambrosethebuild/ghanaphonenumbervalidator
[link-downloads]: https://packagist.org/packages/ambrosethebuild/ghanaphonenumbervalidator
[link-travis]: https://travis-ci.org/ambrosethebuild/ghanaphonenumbervalidator
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/ambrosethebuild
[link-contributors]: ../../contributors
