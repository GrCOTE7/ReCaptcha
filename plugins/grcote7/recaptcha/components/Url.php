<?php

/**
 * ReCaptcha v3 - 2022.
 */

namespace GrCOTE7\ReCaptcha\Components;

use Cms\Classes\ComponentBase;

class Url extends ComponentBase
{
	/**
	 * Gets the details for the component.
	 */
	public function componentDetails()
	{
		return [
			'name'        => 'Url Component',
			'description' => 'Get complete page url without params',
		];
	}

	/**
	 * Returns the properties provided by the component.
	 */
	public function defineProperties()
	{
		return [];
	}

	public function onRun()
	{
		$this->addCss('/plugins/grcote7/recaptcha/components/url/assets/css/url.css');
		$this->page['url'] = $this->pageUrl('');
	}
}
