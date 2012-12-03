<?php
session_start();
// get config	
require_once ('../config.php');
// check for post input
if ($_POST) {
	if (key_exists("username", $_POST)) {
		$username = $_POST['username'];
		$username = trim($username);
		$username = str_replace(" ", "", $username);
		$username = strtolower($username);
	}
	
	if (key_exists("password", $_POST)) {
		$password = $_POST['password'];
		//$password = sha1(sha1(md5($password)));
	}
	
	if (isset($username) && isset($password)) {
		$user = new user();
		$login = $user->user_veri($username, $password);
		if ($login == TRUE) {
			header("Location: " . $CONF->root);
		} else {
			
		}
		
	}
	
} else {
	
}
