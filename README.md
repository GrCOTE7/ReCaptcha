
# A WinterCMS deposit for Google's reCaptcha (v3)

Espace de dial : [![Discord](https://img.shields.io/discord/816852513684193281?label=discord&style=flat-square)](https://discord.com/channels/816852513684193281/817881442125742160)

The goal is to perform a simple form to works with WinterCMS system Ajax 's approach + reCaptcha of Google (v3 here)

## 8 (7 + 1) steps to be able to help

### 1. Recommended steps for a local installation of a fresh WinterCMS installation

 1. Fork this depository
 2. Clone your fork in your local server folder
 3. CLI: ```composer update```
 4. Create a local database named '**recaptcha**'
 5. CLI: ```artisan winter:env```

    With your prefered editor, set your own parameters for access to your local database in the ***.env*** file in the root folder (See ***.env_example***...)

 6. CLI: ```artisan key:generate```

 7. CLI: ```artisan winter:up```

    Be aware: At the end of this process, remember the given provisory password for the backend 's access !

    With your prefered browser (Except with your Tor browser), go inside your adminstrator account (Yes ! In the backend !) and just 2 last things to do:

    Go *****Local URL***/backend**

    * I &nbsp;/ In your adminstrator account, change the given provisory password as you want... Now ! ;-)

    * II / You need now to disable the debug bar plugin

        ***Settings → Updates & plugins → Manage plugins -> Winter.Debugbar : NO Enabled***

        Works well in back end, but not yet in front end (Class "Twig_Extension" not found...)

Now: With Git, under the **BasicWn** tag, **you have got a fresh installation of WinterCMS** (PHP 8.0+ & Laragon 9)

### 2. In fact, you already have got the total code...! Juste access to it (the last research for ajax + recaptcha) in the main branch ;-) !

#### Register your local domain (localhost or better if you're done a local virtualHost, i.e. *recaptcha*) at :

https://www.google.com/recaptcha/admin

and copy in ***.env*** your site key and secret key (See ***.env_example*** again...)

## The challenge if you accept if, is to succeed with reCaptcha with ajax Feature in WinterCMS

Keep in the *form* tag, the data-request / data-attach-loading, etc... And succeed with recaptcha

## Have a good day, and a good use of this code, and don't hesitate to contribute to its evolutions by Pull Requests :-) ! @ Bi1tô* !

### ***Special thanks to Luke Towers & Dreanad, always 'At top', that all of us can find and dial for help and more in <a href="https://discord.com/channels/816852513684193281/817881442125742160" title="Toujours présents pour aider">Espace de Dial**</a>***

*&nbsp;&nbsp;&nbsp; : To soon !<br>
\*\*&nbsp; : Dialog space

---

<p align="center">
    <img src="https://github.com/wintercms/winter/raw/develop/.github/assets/Github%20Banner.png?raw=true" alt="Winter CMS Logo" width="100%" />
</p>

[Winter](https://wintercms.com) is a free, open-source content management system based on the [Laravel](https://laravel.com) PHP framework. Developers and agencies all around the world rely upon Winter for its quick prototyping and development, safe and secure codebase and dedication to simplicity.

No matter how large or small your project is, Winter provides a rich development environment, regardless of your level of experience.

[![Version](https://img.shields.io/github/v/release/wintercms/winter?sort=semver&style=flat-square)](https://github.com/wintercms/winter/releases)
[![Tests](https://img.shields.io/github/workflow/status/wintercms/winter/Tests/develop?label=tests&style=flat-square)](https://github.com/wintercms/winter/actions)
[![License](https://img.shields.io/github/license/wintercms/winter?label=open%20source&style=flat-square)](https://packagist.org/packages/wintercms/winter)
[![Discord](https://img.shields.io/discord/816852513684193281?label=discord&style=flat-square)](https://discord.gg/D5MFSPH6Ux)

[![Open in Gitpod](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/wintercms/winter)

## Installing Winter

Winter can be installed in several ways for both new users and experienced developers - see our [Installation page](https://wintercms.com/install) for more information.

### Quick start with Composer

For advanced users, run the following command in your terminal to install Winter via Composer:

```shell
composer create-project wintercms/winter example.com "dev-develop"
```

Run the following command with the folder created by the previous command to generate an environment file which will contain your configuration settings:

```shell
php artisan winter:env
```

After configuring your installation, you can run the following command to run the database migrations and automatically create an administrator account with the username `admin`. The password of this account will be automatically generated and displayed in your terminal.

```shell
php artisan winter:up
```

## Learning Winter

The best place to learn Winter is by [reading the documentation](https://wintercms.com/docs) or [following some tutorials](https://wintercms.com/blog/category/tutorials). You can also join the maintenance team and our active community on [Discord](https://discord.gg/D5MFSPH6Ux) who are always willing to help out with questions.

## Development team

Winter was forked from October CMS in March 2021 due to a difference in open source management philosophies between the core maintainer team and the two founders of October.

The development of Winter is lead by [Luke Towers](https://luketowers.ca/), along with many wonderful people that dedicate their time to help support and grow the community.

<table>
  <tr>
    <td align="center"><a href="https://github.com/luketowers"><img src="https://avatars.githubusercontent.com/u/7253840?v=3" width="100px;" alt="Luke Towers"/><br /><sub><b>Luke Towers</b></sub></a></td>
    <td align="center"><a href="https://github.com/bennothommo"><img src="https://avatars.githubusercontent.com/u/15900351?v=3" width="100px;" alt="Ben Thomson"/><br /><sub><b>Ben Thomson</b></sub></a></td>
    <td align="center"><a href="https://github.com/mjauvin"><img src="https://avatars.githubusercontent.com/u/2013630?v=3" width="100px;" alt="Marc Jauvin"/><br /><sub><b>Marc Jauvin</b></sub></a></td>
    <td align="center"><a href="https://github.com/jaxwilko"><img src="https://avatars.githubusercontent.com/u/31214002?v=4" width="100px;" alt="Jack Wilkinson"/><br /><sub><b>Jack Wilkinson</b></sub></a></td>
  </tr>
</table>

## Foundation library

Winter is built on top of the wildly-popular [Laravel](https://laravel.com) framework for PHP, with the in-house [Storm](https://github.com/wintercms/storm) library as a buffer between the Laravel framework and the Winter project, to minimize breaking changes and improve stability.

## Getting in touch

You can get in touch with the maintainer team using the following mediums:

* [Follow us on Twitter](https://twitter.com/usewintercms) for announcements and updates.
* [Join us on Discord](https://discord.gg/D5MFSPH6Ux) to chat with us.

## Contributing

Before contributing issues or pull requests, be sure to review the [Contributing Guidelines](https://github.com/wintercms/.github/blob/master/CONTRIBUTING.md) first.

### Coding standards

Please follow the following guides and code standards:

* [PSR 4 Coding Standards](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md)
* [PSR 2 Coding Style Guide](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)
* [PSR 1 Coding Standards](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md)

### Code of conduct

In order to ensure that the Winter community is welcoming to all, please review and abide by the [Code of Conduct](https://github.com/wintercms/.github/blob/master/CODE_OF_CONDUCT.md).

## License

The Winter platform is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Security vulnerabilities

Please review [our security policy](https://github.com/wintercms/winter/security/policy) on how to report security vulnerabilities.
