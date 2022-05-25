<?php

/**
 * (c) Boosteur.com v1.02 - 2022.
 */

$curlData = [
	'secret'   => 'SECRET_KEY',
	'response' => $token,
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($curlData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curlResponse = curl_exec($ch);

$captchaResponse = json_decode($curlResponse, true);

if ('1' == $captchaResponse['success']
	&& $captchaResponse['action'] == $action
	&& $captchaResponse['score'] >= 0.5
	&& $captchaResponse['hostname'] == $_SERVER['SERVER_NAME']) {
	echo 'Form Submitted Successfully by ' . $name . '
(Score = ' . $captchaResponse['score'] . ')';
} else {
	echo '<h3 class="red bold">You are not a human !</h3>';
}
