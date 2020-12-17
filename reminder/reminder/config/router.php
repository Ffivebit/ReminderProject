<?php

	if(!defined("APP")) die();

	if(!isset($_SERVER["QUERY_STRING"])) die();
	$route = strtolower(ltrim($_SERVER["QUERY_STRING"], '//'));
	switch($route) {

		default:
			diex("Error 404");
		break;

	}
?>