<?php

	if(!defined("APP")) die();

	if(session_id()){
		unset($_SESSION["User"]);
		session_destroy();
	}

	redirect(".");

?>