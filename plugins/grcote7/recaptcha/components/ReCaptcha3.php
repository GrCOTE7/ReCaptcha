<?php

/**
 * ReCaptcha v3 - 2022.
 */

namespace GrCOTE7\ReCaptcha\Components;

use Cache;
use Cms\Classes\ComponentBase;

class ReCaptcha3 extends ComponentBase
{
	/**
	 * Gets the details for the component.
	 */
	public function componentDetails()
	{
		return [
			'name'        => 'ReCaptcha3 Component',
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
		$post = $this->page['post'] = $_POST;
		if (empty($post)) {
			// echo 'ok 1';
			$this->Start();
		} else {
			// echo 'ok 2';
			$this->End();
		}
		// Cache::flush();
	}

	public function Start()
	{
		$sitekey = $this->page['sitekey'] = env('RECAPTCHA_SITE_KEY');
		$this->addJs('https://www.google.com/recaptcha/api.js');
		$this->addJs(['$/grcote7/recaptcha/components/recaptcha3/assets/js/onsubmit.js']);
	}

	public function End()
	{
		// var_dump($response);
		$method = $_SERVER['REQUEST_METHOD'];
		if ('POST' == $method && isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
			$responseExists = true;

			$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . env('RECAPTCHA_SECRET_KEY') . "&response={$_POST['g-recaptcha-response']}";
			// exit($url);

			if (function_exists('curl_version')) {
				$curl = curl_init($url);
				curl_setopt($curl, CURLOPT_HEADER, false);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_TIMEOUT, 1);
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
				$response = curl_exec($curl);
			} else {
				$response = file_get_contents($url);
			}
			$response = json_decode($response);

			// echo '<PRE>';
			// print_r($response);
			// echo '</PRE>';

			if ($response->success) {
				$sender  = $_POST['email'] ?? '???';
				$headers = "From: Form Feedback <${sender}>";
				mail('lio@bl.com', 'Test TR par ' . $sender, 'ok', $headers);
				$this->page['score']  = 456;
				$this->page['respOk'] = 'Formulaire bien soumis par ' . $sender . ' !';
			}
		}
	}
}
