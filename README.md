<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Steps to Install

**softwares required**
```console

php: 8.2
node: v22.13.1
npm: 11.1.0
```


**clone repo:**
```console
git clone git@github.com:zohaibhassan156/agents.git
```

**change to project dir**

cd agents

**composer/php commands required**

```console
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
```

==> select **yes** for sqlite database

**node commands required**

```console
npm i -f
npm run build
```

**check in browser**

```console
php artisan serve
```
