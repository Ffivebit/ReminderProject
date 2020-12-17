<?php

	if(!defined("APP")) die();

	requireLogin();

	function validate(){

		if(!isset($_POST["title"]) || $_POST["title"] == ""){
			alert("Please enter a title");
			return false;
		}

		if(!isset($_POST["text"]) || $_POST["text"] == ""){
			alert("Please enter a text");
			return false;
		}

		if(!isset($_POST["enddate"]) || $_POST["enddate"] == ""){
			alert("Please enter an end-date");
			return false;
		}

		return true;

	}

	if(isPOST() && validate()){

		if(reminderAdd(
			user()->ID,
			$_POST["title"],
			$_POST["text"],
			$_POST["enddate"]
		)){
			alert("Successfully added a new reminder");
			redirect("reminders");
		}else{
			alert("There was an error while adding a new reminder");
		}

	}

	require "header.php"; 

?>

<div class="container">
	<div class="card"></div>
		<div class="card">
		<h1 class="title">New Reminder</h1>
			<form method="POST">

				<div class="input-container">
					<input type="input" name="title" id="title" class="form-control" placeholder="Reminder Title" value="<?php echoPost("title"); ?>">
				</div>

				<div class="input-container">
					<textarea name="text" id="text" class="form-control" placeholder="Reminder Text"><?php echoPost("text"); ?></textarea>
				</div>

				<div class="input-container">
					<input type="datetime-local" name="enddate" id="enddate" class="form-control" value="<?php echoPost("enddate"); ?>">
				</div>

				<div class="alligncen">
				<button type="submit" class="btn btn-primary px-4">Add Reminder</button>
			</form>
		</div>
	</div>
</div>



<?php require "footer.php"; ?>