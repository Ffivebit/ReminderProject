<?php

	if(!defined("APP")) die();

	if(isset($_POST["email"]) && isset($_POST["password"])){
		if(userLogin($_POST["email"], $_POST["password"])){
			$_SESSION["User"] = userGet($_POST["email"]);
			alert("Successfully logged in");
			redirect(".");
		}else{
			alert("Incorrect username or password");
		}
	}

	require "header.php"; 

?>
	
	<h1 class="font-weight-light text-primary text-center mb-4">Login</h1>

	<div class="row justify-content-center">
		<div class="col-md-5">
			<form method="POST">
				<div class="form-group">
					<label for="email" class="text-primary">Email</label>
					<input type="email" name="email" id="email" required class="form-control" placeholder="john.smith@email.com">
				</div>
				<div class="form-group">
					<label for="password" class="text-primary">Password</label>
					<input type="password" name="password" id="password" required class="form-control" placeholder="***********">
				</div>
				<div class="d-flex justify-content-between align-items-center">
					<button type="submit" class="btn btn-primary px-4">Login</button>
					<p class="small text-muted mb-0 text-right">Don't have an account yet?<br><a href="register" class="text-primary">Click here to register!</a></p>
				</div>
			</form>
		</div>
	</div>

<?php require "footer.php"; ?>