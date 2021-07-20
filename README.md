# MagePrince FAQ

## Requirements

You need to have the [MagePrince FAQ](https://github.com/mageprince/magento2-FAQ) module installed and configured within your Magento 2 installation.

## Installation

```
composer require rapidez/mageprince-faq
```

After that go to the configured base url, default: `/faq`

## Views

If you need to change the views you can publish them with:
```
php artisan vendor:publish --provider="Rapidez\MagePrinceFaq\MagePrinceFaqServiceProvider" --tag=views
```

## License

GNU General Public License v3. Please see [License File](LICENSE) for more information.
