<?php 

	if(!defined("APP")) die();

	requireLogin();

	require "header.php"; 

?>
	

<div class="container">
	<div class="card"></div>
		<div class="card">
		<h1 class="title">Account</h1>
			<form method="POST">

				<div class="input-container">
				<p><span class="text-primary">ID: </span> <?php echox(user()->ID); ?></p>
				</div>

				<div class="input-container">
				<p><span class="text-primary">Firstname: </span> <?php echox(user()->Firstname); ?></p>
				</div>

				<div class="input-container">
				<p><span class="text-primary">Surname: </span> <?php echox(user()->Surname); ?></p>
				</div>
				<div class="input-container">
				<p><span class="text-primary">Date of birth: </span> <?php echox(user()->DOB); ?></p>
				</div>
				<div class="input-container">
				<p><span class="text-primary">Email: </span> <?php echox(user()->Email); ?></p>
				</div>
				<div class="input-container">
				<p class="mb-0"><span class="text-primary">Registered: </span> <?php echox(user()->Registered); ?></p>
				</div>

			
			</form>
	
		</div>
</div>

<?php require "footer.php"; ?>
