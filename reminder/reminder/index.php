<?php

	define("APP", "Scheduler");

	define("DB_HOSTNAME", "localhost");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "");
	define("DB_DATABASE", "Scheduler");

	session_start();

	require_once "classes/helpers.php";
	
	$db = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	if($db->connect_errno) die("Database error");

	if(!isset($_SERVER["PATH_INFO"])) die("Path error");
	$page = strtolower(ltrim($_SERVER["PATH_INFO"], '//'));
	$path = "pages/" . ($page === "" ? "main" : $page) . ".php";
	if(!file_exists($path)) diex("Error 404");

	require_once "classes/data.php";
	require_once $path;

?>