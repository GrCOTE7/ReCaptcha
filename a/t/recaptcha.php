<?php

/**
 * ReCaptcha v3 - 2022.
 */

// $this['var'] = 123;

// function getVars()
// {
// 	$this->page['responseExists'] = false;
// 	$this->page['method']         = $_SERVER['REQUEST_METHOD'];
// 	$this->page['_token']         = $_POST['_token'] ?? 'Pas de token';
// 	$this->page['repGgle']        = $_POST['g-recaptcha-response'] ?? 'Pas de réponse reCaptcha';
// 	$this->page['data']           = $this->page['repGgle'];
// 	$arr['Header']                = $_SERVER['REQUEST_METHOD'];
// 	$arr['_token']                = $this->page['_token'];
// 	$arr['réponse ggle']          = $this->page['repGgle'];
// 	$this['vars']                 = $arr;
// }

// if (isset($_POST['g-recaptcha-response'])) {
if ($_POST) {
	echo "<script>console.log('PHP');</script>";
	var_dump($_POST);

	$this->page['data'] = $_POST;
}
	if ('POST' == $this->page['method'] && isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
		return 'ok';
		$this->page['responseExists'] = true;
		$url                          = "https://www.google.com/recaptcha/api/siteverify?secret=SECRET_KEY&response={$_POST['g-recaptcha-response']}";
		// die($url);

		if (!function_exists('curl_version')) {
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_HEADER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_TIMEOUT, 1);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			$response = curl_exec($curl);
		} else {
			$response = file_get_contents($url);
		}
		$this->response = json_decode($response);

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
	}
