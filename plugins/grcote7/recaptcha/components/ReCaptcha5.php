<?php

/**
 * ReCaptcha v3 - 2022.
 */

namespace GrCOTE7\ReCaptcha\Components;

use Cms\Classes\ComponentBase;

class ReCaptcha5 extends ComponentBase
{
	/**
	 * Gets the details for the component.
	 */
	public function componentDetails()
	{
		return [
			'name'        => 'ReCaptcha5 Component',
			'description' => 'No description provided yet...',
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
		$this->addJs(['$/grcote7/recaptcha/components/recaptcha5/assets/js/onsubmit.js']);
	}

	public function onSubmit()
	{
		// Here form traitment...
		$this->page['result'] = 777;
	}
}
