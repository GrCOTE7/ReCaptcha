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
		if (empty($post)) {
			// echo 'ok 1';
			$this->Start();
		} else {
			// echo 'ok 2';
			$this->End();
		}
	}

	public function Start()
	{
		$sitekey = $this->page['sitekey'] = env('RECAPTCHA_SITE_KEY');
		$this->addJs('https://www.google.com/recaptcha/api.js?render=' . $sitekey);
		$this->addJs('/plugins/grcote7/recaptcha/components/recaptcha6/assets/js/initCaptcha6.js');
		$this->getVars();
	}

	public function End()
	{
		var_dump($_POST);
	}

	public function onSubscribe()
	{
		// $this->getVars();

		// $this->page['vars'] = [123];
		// var_dump($_POST);
		$this->getVars();
		// $this->page['vars'] = $_POST;

		// dd($_POST['g-recaptcha-response']);

		// 		$name   = $_POST['email'];
// 		$token  = $_POST['_token'];
// 		$action = $_POST['action'];

// 		$curlData = [
// 			'secret'   => 'SECRET_KEY',
// 			'response' => $token,
// 		];

// 		$ch = curl_init();
// 		curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
// 		curl_setopt($ch, CURLOPT_POST, 1);
// 		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($curlData));
// 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 		$curlResponse = curl_exec($ch);

// 		$captchaResponse = json_decode($curlResponse, true);

// 		if ('1' == $captchaResponse['success']
// 	&& $captchaResponse['action'] == $action
// 	&& $captchaResponse['score'] >= 0.5
// 	&& $captchaResponse['hostname'] == $_SERVER['SERVER_NAME']) {
// 			echo 'Form Submitted Successfully by ' . $email . '
// (Score = ' . $captchaResponse['score'] . ')';
// 		} else {
// 			echo 'You are not a human';
// 		}

		// if ('POST' == $this->page['method'] && isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
		// 	return 'ok';
		// 	$this->page['responseExists'] = true;
		// 	$url                          = "https://www.google.com/recaptcha/api/siteverify?secret=SECRET_KEY&response={$_POST['g-recaptcha-response']}";
		// 	// die($url);

		// 	if (!function_exists('curl_version')) {
		// 		$curl = curl_init($url);
		// 		curl_setopt($curl, CURLOPT_HEADER, false);
		// 		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		// 		curl_setopt($curl, CURLOPT_TIMEOUT, 1);
		// 		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		// 		$response = curl_exec($curl);
		// 	} else {
		// 		$response = file_get_contents($url);
		// 	}
		// 	$this->response = json_decode($response);

			// echo '<PRE>';
			//     print_r($response);
			// echo '</PRE>';

			// if ($this->page->response->success) {
			// 	$sender  = $_POST['email'] ?? '???';
			// 	$headers = "From: Feedback <${sender}>";
			// 	mail('lio@bl.com', 'Test TR par ' . $sender, 'ok', $headers);
			// 	$this->page['repTrOK']  = 'Formulaire bien soumis par ' . $sender . ' !';
			// 	$this->page['response'] = $response;
			// }
		// }
	}

	public function getVars()
	{
		$this->page['responseExists'] = false;

		$arr['method']      = $_SERVER['REQUEST_METHOD'];
		$arr['email']       = $_POST['email'] ?? 'Pas de email';
		$arr['_token']      = $_POST['_token'] ?? 'Pas de token Csrf';
		$arr['token']       = $_POST['token'] ?? 'Pas de réponse reCaptcha';
		$this->page['vars'] = $arr;
	}
}
