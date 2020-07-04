<?php
	
	session_start();

	require "vendor/autoload.php";
	require "Linkedin.php";

	use myPHPnotes\LinkedIn;

	$app_id = "YOUR_APP_ID";
	$app_secret = "YOUR_APP_SECRET";
	$app_callback = "http://localhost/linkedinn/callback.php";
	$app_scopes = "r_emailaddress r_liteprofile w_member_social";

	$ssl = false; // ALWAYS TRUE FOR PRODUCTION USE

	$linkedin = new LinkedIn($app_id, $app_secret, $app_callback, $app_scopes, $ssl);
