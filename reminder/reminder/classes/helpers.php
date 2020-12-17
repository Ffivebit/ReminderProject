<?php

	if(!defined("APP")) die();

	function redirect($url){
		header("Location: " . $url);
		die();
	}

	function diex($message){
		require "pages/message.php";
		die();
	}


	$alert = "";
	function alert($msg){
		GLOBAL $alert;
		$alert = $msg;
	}

	function echox($text){
		echo htmlentities($text);
	}

	function echoPost($text){
		if(!isset($_POST[$text])) return;
		echo htmlentities($_POST[$text]);
	}

	function isPOST(){
		return $_SERVER["REQUEST_METHOD"] === "POST";
	}

	function isLoggedIn(){
		return isset($_SESSION["User"]);
	}

	function user(){
		return $_SESSION["User"];
	}

	function requireLogin(){
		if(!isLoggedIn()) redirect("login");
	}

?>