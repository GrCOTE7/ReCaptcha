<?php

/**
 * ReCaptcha v3 - 2022.
 */

echo 'OK 21<hr>';

for ($i = 1; $i < 100; ++$i) {
	echo $i . ' ';
}

$arr = [
	'zero'  => 0,
	'un'    => 1,
	'deux'  => 2,
	'trois' => 3,
];

$arr = array_flip($arr);

echo '<hr>';

for ($i = 0; $i < count($arr); ++$i) {
	$a = $arr[$i];
	echo ucfirst($a) . '<br>';
}
