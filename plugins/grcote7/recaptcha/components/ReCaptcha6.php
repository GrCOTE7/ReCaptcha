<?php

/**
 * ReCaptcha v3 - 2022.
 */

namespace GrCOTE7\ReCaptcha\Components;

use Cms\Classes\ComponentBase;

class ReCaptcha6 extends ComponentBase
{
	/**
	 * Gets the details for the component.
	 */
	public function componentDetails()
	{
		return [
			'name'        => 'ReCaptcha6 Component',
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
		if (!$post) {
			$this->init();
		}
	}

	public function init()
	{
		$sitekey = $this->page['sitekey'] = env('RECAPTCHA_SITE_KEY');
		$this->addJs('https://www.google.com/recaptcha/api.js?render=' . $sitekey);
		$this->addJs('/plugins/grcote7/recaptcha/components/recaptcha6/assets/js/initCaptcha6.js');
		// $this->getVars();
	}

	public function onSubscribe()
	{
		// $this->getVars();

		$email = $_POST['email'];
		$token = $_POST['token'];

		$secretkey = env('RECAPTCHA_SECRET_KEY');

		$url = "https://www.google.com/recaptcha/api/siteverify?secret={$secretkey}&response={$_POST['token']}";

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
			$headers = "From: Feedback <${sender}>";
			mail('gc7@recaptcha.test', 'Test TR par ' . $sender, 'Ok', $headers);
			$this->page['repTrOK'] = 'Formulaire bien soumis par ' . $sender . ' !';
			$this->page['vars']    = (array) $response;
		// Here form validator
		} else {
			$this->page['vars'] = (array) $response;
		}
	}

	public function getVars()
	{
		// $this->page['responseExists'] = false;

		$arr['method']      = $_SERVER['REQUEST_METHOD'];
		$arr['email']       = $_POST['email'] ?? 'Pas de email';
		$arr['_token']      = $_POST['_token'] ?? 'Pas de token Csrf';
		$arr['token']       = $_POST['token'] ?? 'Pas de réponse reCaptcha';
		$this->page['vars'] = $arr;
	}
}
