# Content Permissions

![License](https://img.shields.io/badge/license-AGPL--3.0--or--later-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/club-1/flarum-ext-content-permissions.svg)](https://packagist.org/packages/club-1/flarum-ext-content-permissions) [![Total Downloads](https://img.shields.io/packagist/dt/club-1/flarum-ext-content-permissions.svg)](https://packagist.org/packages/club-1/flarum-ext-content-permissions)

A [Flarum](https://flarum.org) extension. Add group permissions for post content related features:

- Allow bots to follow posted links (remove `nofollow ugc` from `rel` attribute)

## Installation

Install with composer:

```sh
composer require club-1/flarum-ext-content-permissions:"*"
```

## Updating

```sh
composer update club-1/flarum-ext-content-permissions:"*"
php flarum migrate
php flarum cache:clear
```

## Links

- [Packagist](https://packagist.org/packages/club-1/flarum-ext-content-permissions)
- [GitHub](https://github.com/club-1/flarum-ext-content-permissions)
- [Discuss](https://discuss.flarum.org/d/PUT_DISCUSS_SLUG_HERE)
