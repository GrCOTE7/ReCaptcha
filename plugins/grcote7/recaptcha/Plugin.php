<?php

/**
 * ReCaptcha v3 - 2022.
 */

namespace GrCOTE7\ReCaptcha;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * ReCaptcha Plugin Information File.
 */
class Plugin extends PluginBase
{
	/**
	 * Returns information about this plugin.
	 */
	public function pluginDetails(): array
	{
		return [
			'name'        => 'grcote7.recaptcha::lang.plugin.name',
			'description' => 'grcote7.recaptcha::lang.plugin.description',
			'author'      => 'GrCOTE7',
			'icon'        => 'icon-leaf',
		];
	}

	/**
	 * Register method, called when the plugin is first registered.
	 */
	public function register(): void
	{
	}

	/**
	 * Boot method, called right before the request route.
	 */
	public function boot(): void
	{
	}

	/**
	 * Registers any frontend components implemented in this plugin.
	 */
	public function registerComponents(): array
	{
		return [
			'GrCOTE7\ReCaptcha\Components\Url'        => 'url',
			'Grcote7\ReCaptcha\Components\ReCaptcha'  => 'recaptcha',
			'Grcote7\ReCaptcha\Components\ReCaptcha3' => 'recaptcha3',
		];
	}

	/**
	 * Registers any backend permissions used by this plugin.
	 */
	public function registerPermissions(): array
	{
		return []; // Remove this line to activate

		return [
			'grcote7.recaptcha.some_permission' => [
				'tab'   => 'grcote7.recaptcha::lang.plugin.name',
				'label' => 'grcote7.recaptcha::lang.permissions.some_permission',
				'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
			],
		];
	}

	/**
	 * Registers backend navigation items for this plugin.
	 */
	public function registerNavigation(): array
	{
		return []; // Remove this line to activate

		return [
			'recaptcha' => [
				'label'       => 'grcote7.recaptcha::lang.plugin.name',
				'url'         => Backend::url('grcote7/recaptcha/mycontroller'),
				'icon'        => 'icon-leaf',
				'permissions' => ['grcote7.recaptcha.*'],
				'order'       => 500,
			],
		];
	}
}
