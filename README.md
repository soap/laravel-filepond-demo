<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## About Filepond

A JavaScript library that can upload anything you throw at it, optimizes images for faster uploads, and offers a great, accessible, silky smooth user experience.

## About Application.
- Laravel 8 application with PHP 8 support.

## Filepond Implementation
- Laravel application with laravel/breeze installed.
- Spatie/media-library was also used for image manipulation on server.
- Plain javascript used with Filepond. Filepond was loaded from CDN.
- User can upload profile image upon registration. File will upload to server before user model was create.
- Upon successful registration, temporary file will be moved to media collection 

## Filepond Features Implemented
- Progress upload with indicator.
- Image cropping will be implemented.

## Installation and Configuration
- Clone this repository.
- Install packages using composer. Using `` composer install ``
- Create database for the application
- Copy .env.example file to .env, input database configurations.   
- Generate application key using `` php artisan key:generate ``
- Migrate database using `` php artisan migrate ``
- Launch your application and test it using `` php artisan serve ``

## Contributing

Thank you for considering contributing to the demo application. Any idea or suggestions are welcome.

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
