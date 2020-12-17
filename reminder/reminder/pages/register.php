<?php

	if(!defined("APP")) die();

	if(
		isset($_POST["email"]) && 
		isset($_POST["password"]) && 
		isset($_POST["confirm"]) && 
		isset($_POST["firstname"]) &&
		isset($_POST["surname"]) &&
		isset($_POST["dob"])
	){

		if($_POST["password"] !== $_POST["confirm"]){
			alert("Please make sure that the passwords are the same");
		}else{
			if(explode("@", $_POST["email"]) !== 2){
				if(userExists($_POST["email"])){
					alert("Email is already registered");
				}else{
					if(userAdd(
						$_POST["email"], 
						$_POST["password"],
						$_POST["firstname"],
						$_POST["surname"],
						$_POST["dob"]
					)){
						$_SESSION["User"] = userGet($_POST["email"]);
						alert("Successfully registered");
						redirect(".");
					}else{
						alert("Error while registering");
					}
				}
			}else{
				alert("Please enter a valid email address");
			}
		}
			
	}

	require "header.php"; 

?>

	<h1 class="font-weight-light text-primary text-center mb-4">Register</h1>
	
	<div class="row justify-content-center">
		<div class="col-md-5">
			<form method="POST">
				<div class="form-group">
					<label for="firstname" class="text-primary">Firstname</label>
					<input type="text" name="firstname" id="firstname" required class="form-control" placeholder="John">
				</div>
				<div class="form-group">
					<label for="surname" class="text-primary">Surname</label>
					<input type="text" name="surname" id="surname" required class="form-control" placeholder="Smith">
				</div>
				<div class="form-group">
					<label for="dob" class="text-primary">Date of birth</label>
					<input type="date" name="dob" id="dob" required class="form-control">
				</div>
				<div class="form-group">
					<label for="email" class="text-primary">Email</label>
					<input type="email" name="email" id="email" required class="form-control" placeholder="john.smith@email.com">
				</div>
				<div class="form-group">
					<label for="password" class="text-primary">Password</label>
					<input type="password" name="password" id="password" required class="form-control" placeholder="***********">
				</div>
				<div class="form-group">
					<label for="confirm" class="text-primary">Confirm Password</label>
					<input type="password" name="confirm" id="confirm" required class="form-control" placeholder="***********">
				</div>
				<div class="d-flex justify-content-between align-items-center">
					<button type="submit" class="btn btn-primary px-4">Register</button>
					<p class="small text-muted mb-0 text-right">Already have an account?<br><a href="login" class="text-primary">Click here to login!</a></p>
				</div>
			</form>
		</div>
	</div>

<?php require "footer.php"; ?>