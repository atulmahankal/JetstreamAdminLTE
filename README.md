<p align="center">
<!-- <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a> -->
</p>

<h1 align="center">Laravel + AdminLTE</h1>

<p align="center">
<a href="https://github.com/atulmahankal/jetstreamadminlte/actions"><img src="https://github.com/atulmahankal/jetstreamadminlte/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/atulmahankal/jetstreamadminlte"><img src="https://img.shields.io/packagist/dt/atulmahankal/jetstreamadminlte" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/atulmahankal/jetstreamadminlte"><img src="https://img.shields.io/packagist/v/atulmahankal/jetstreamadminlte" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/atulmahankal/jetstreamadminlte"><img src="https://img.shields.io/packagist/l/atulmahankal/jetstreamadminlte" alt="License"></a>
</p>

### Composer.json

```json
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/atulmahankal/JetstreamAdminLTE.git"
    }
  ],
  "require": {
    "atulmahankal/jetstreamadminlte": "dev-main"
  }
}
```
```bash
composer update
php artisan jetstreamadminlte:install
```

### Re-Publish Resources:
```bash
php artisan vendor:publish --tag=amadminlte-theme --force
php artisan vendor:publish --tag=jetstreamadminlte-views --force
php artisan vendor:publish --tag=jetstreamadminlte-controller --force
```