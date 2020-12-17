<?php

	if(!defined("APP")) die();

	requireLogin();

	if(isPOST() && isset($_POST["id"])){
		if(reminderDelete(user()->ID, $_POST["id"])){
			diex("Successfully deleted reminder");
		}else{
			diex("There was an error while deleting the reminder");
		}
	}

	redirect("reminders");

?>