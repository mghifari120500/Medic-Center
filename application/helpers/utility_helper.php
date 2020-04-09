<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('asset_url')) {
	function asset_url() {
		return base_url().'assets/';
	}
}

if (!function_exists('showPrice')) {
	function showPrice($price) {
		return "Rp. " . number_format($price,0,",",".");
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function checkName($name) {
	return preg_match("/^[a-zA-Z ]*$/",$name) && $name != "";
}

function checkEmail($email) {
	return filter_var($email, FILTER_VALIDATE_EMAIL) && $email != "";
}

function checkPassword($password, $confirm) {
	return $password == $confirm && $password != "";
}
	
