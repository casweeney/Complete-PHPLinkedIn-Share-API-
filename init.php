<?php
	
	session_start();

	require "vendor/autoload.php";
	require "Linkedin.php";

	use myPHPnotes\LinkedIn;

	$app_id = "77ggd6y41q01ty";
	$app_secret = "la6FRXPCFUGmqzHn";
	$app_callback = "http://localhost/linkedinn/callback.php";
	$app_scopes = "r_emailaddress r_liteprofile w_member_social";

	$ssl = false; // ALWAYS TRUE FOR PRODUCTION USE

	$linkedin = new LinkedIn($app_id, $app_secret, $app_callback, $app_scopes, $ssl);