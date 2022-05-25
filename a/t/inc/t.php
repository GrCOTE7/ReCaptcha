<?php

/**
 * ReCaptcha v3 - 2022.
 */

use Winter\User\Models\User;

if (class_exists('Winter\User\Models\User')) {
	$us    = User::all();
	$ust[] = count($us);
	$ust[] = 'User';
	foreach ($us as $u) {
		$ust[] = $u->name;
	}

	$this['data'] = $ust ?? 'No user is registered !';
} else {
	exit('<p style="font-family: arial; color:red; text-align:center; margin: 50px auto">Ce fichier doit <b>UNIQUEMENT</b> être appellé <b>depuis la page bl/t</b><br>(NB: Fichier inclu depuis un bloc PHP ds wn)<br> et <b>ne peut donc pas être appelé directement</b> !</p>');
}
