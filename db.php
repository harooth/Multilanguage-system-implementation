<?php
	require "libs/rb.php";
	require "language/language_class.php";
	R::setup('mysql:host=localhost;dbname=test',  'root', '');

	$user_lang = R::findOne('users', 'id = ?', array(1));
	if($user_lang->language == ''){
		$language = 'en';
	} else {
		$language = $user_lang->language;
	}

	$lang = new Language($language);

	
 ?>