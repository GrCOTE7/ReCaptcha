# Debugbar Plugin

Easily see what's going on under the hood of your Winter CMS application.

# Installation

To install from the [Marketplace](https://github.com/wintercms/wn-debugbar-plugin), click on the "Add to Project" button and then select the project you wish to add it to and pay for the plugin. Once the plugin has been added to the project, go to the backend and check for updates to pull in the plugin.

To install from the backend, go to **Settings -> Updates & Plugins -> Install Plugins** and then search for `Winter.DebugBar`.

To install from [the repository](https://github.com/wintercms/wn-debugbar-plugin), clone it into **plugins/winter/debugbar** and then run `composer update` from your project root in order to pull in the dependencies.

To install it with Composer, run `composer require winter/wn-debugbar-plugin` from your project root.

### Usage

Set `debug` to `true` in `config/app.php`, and the debugbar should appear on your site to all authenticated backend users with the `winter.debugbar.access_debugbar` permission. If you would like to make the debugbar accessible to all users regardless of authentication & permissions, then set `allow_public_access` to `true` in `config/winter/debugbar/config.php`.

See [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) for more usage instructions and documentation.

To include exceptions in the response header of ajax calls set `debugAjax` to `true` in `config/app.php`.
