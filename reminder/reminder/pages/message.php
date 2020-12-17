<?php 

	if(!defined("APP")) die();
	
	require "header.php"; 

?>
	
	<div class="text-center my-5">
		<h1 class="display-4 text-primary text-center"><?php echox($message); ?></h1>
		<h3><a href="reminders" class="lead text-no-decoration">Go Back</a></h3>
	</div>

<?php require "footer.php"; ?>