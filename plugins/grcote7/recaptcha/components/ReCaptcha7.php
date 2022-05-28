<?php

/**
 * ReCaptcha v3 - 2022.
 */

namespace GrCOTE7\ReCaptcha\Components;

use Cms\Classes\ComponentBase;

class ReCaptcha7 extends ComponentBase
{
	/**
	 * Gets the details for the component.
	 */
	public function componentDetails()
	{
		return [
			'name'        => 'ReCaptcha7 Component',
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
	{ $this->page['momo'] ='Quand la page arrive, c est ici que tu as le résultat...';
		$sitekey               = env('RECAPTCHA_SITE_KEY');
		$this->page['sitekey'] = $sitekey;
		// echo $sitekey;
		echo "
        <script>
            console.log('Ok 001 : ' + '.${sitekey}.');
            var sitekey =' . ${sitekey} . '
        </script>";

		$this->getVars();

		// Your code
	}

	public function onSubscribe()
	{	$this->page['momo'] ='Quand la page reviens, c est ici que tu en as le résultat :-)';
		$sitekey               = env('RECAPTCHA_SITE_KEY');
		$this->page['sitekey'] = $sitekey;
		$this->getVars();
		// echo "
		// <script>
		//     console.log('Ok 002 : ' + '.${sitekey}.');
		//     var sitekey =' . ${sitekey} . '
		// </script>";
		// Your code
	}

	public function getVars()
	{
		$this->page['responseExists'] = false;

		$arr['method'] = $_SERVER['REQUEST_METHOD'];
		$arr['email']  = $_POST['email'] ?? 'Pas de email';
		$arr['_token'] = $_POST['_token'] ?? 'Pas de token Csrf';
		$arr['token']  = $_POST['g-recaptcha-response'] ?? 'Pas de réponse reCaptcha';
		// $arr['réponse ggle'] = $this->page['repGgle'];
		$this->page['vars'] = $arr;
	}
}
