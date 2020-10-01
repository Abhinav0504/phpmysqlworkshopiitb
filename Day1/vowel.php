<?php
	$var = 'V';
	switch ($var) {
		case 'a':
		case 'e':
		case 'i':
		case 'o':
		case 'u':
		case 'A':
		case 'E':
		case 'I':
		case 'O':
		case 'U':
			echo $var." is a vowel";
			break;
		default:
			echo $var." is a consonant";
			break;
	}
?>