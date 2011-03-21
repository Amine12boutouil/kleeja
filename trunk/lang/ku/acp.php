<?php
//
// kleeja language, admin
// Arabic
//

if (!defined('IN_COMMON'))
	exit;

if (empty($lang) || !is_array($lang))
	$lang = array();


$lang = array_merge($lang, array(

	# ?
	'LOADING'					=> 'Loading',
	'ERROR_AJAX'				=> 'There is an error, try again!.',
	'MORE'						=> 'More',
	'MENU'						=> 'Menu',
	'WELCOME'					=> 'Welcome',
	'ENABLE_CAPTCHA'			=> 'Enable Captcha in Kleeja',
	'NO_THUMB_FOLDER'			=> 'It seems you enabled Thumbs but in same time the folder %s does not exist! create it.',
));
