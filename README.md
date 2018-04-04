# pivotal

[![Software License][ico-license]](LICENSE.md)

A tool to print tickets from pivotal using pivotal api.

## How to install
- Run `$ composer install`

## How to use
- Change the constant `TOKEN` to your api token, fund under [your profile](https://www.pivotaltracker.com/profile) in pivotal
- Change the constant `STORIES_QUERY` reflect the ticket IDs you wish to print. (example:`'?filter=id:156436834,156424287,156421119,156420857,156421331,151671139'`)
- Run `$ php -S localhost:4000` to host the tool.
- Prepare an A4 page with the post it notes and put it in the printer with the correct orientation, depending on the printer (notes facing upwards on the `HP LaserJet 400`)
- Print the page

## Change log
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security
If you discover any security related issues, please email dev@paybreak.com instead of using the issue tracker.

## Credits
- [PayBreak][link-author]
- [All Contributors][link-contributors]

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/PayBreak/pivotal.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/PayBreak/pivotal/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/PayBreak/pivotal.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/PayBreak/pivotal.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/PayBreak/pivotal.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/PayBreak/pivotal
[link-travis]: https://travis-ci.org/PayBreak/pivotal
[link-scrutinizer]: https://scrutinizer-ci.com/g/PayBreak/pivotal/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/PayBreak/pivotal
[link-downloads]: https://packagist.org/packages/PayBreak/pivotal
[link-author]: https://github.com/PayBreak
[link-contributors]: ../../contributors
