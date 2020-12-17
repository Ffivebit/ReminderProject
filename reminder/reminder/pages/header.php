<?php if(!defined("APP")) die(); ?>

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="shortcut icon" href="assets/favicon.png">

		<link rel="stylesheet" href="assets/bootstrap.css">

		<title>Scheduler</title>
		
	</head>

	<body>

		<header>

			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

				<div class="container">

					<a class="navbar-brand" href=".">
						<img src="assets/logo.png" width="30" height="30" alt="Logo" loading="lazy">
					</a>
					
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div class="collapse navbar-collapse" id="navbar">

						<ul class="navbar-nav mr-auto">
					
							<li class="nav-item">
								<a class="nav-link text-primary" href=".">Home</a>
							</li>

							<?php if(isLoggedIn()): ?>
						
								<li class="nav-item">
									<a class="nav-link text-primary" href="new">New Reminder</a>
								</li>
						
								<li class="nav-item">
									<a class="nav-link text-primary" href="reminders">My Reminders</a>
								</li>
						
							<?php endif; ?>

						</ul>
					
						<ul class="navbar-nav">					
					
							<?php if(isLoggedIn()): ?>
					
								<li class="nav-item">
									<a class="nav-link text-primary" href="account"><?php echox(user()->Firstname); ?></a>
								</li>
					
								<li class="nav-item">
									<a class="nav-link text-primary" href="logout">Logout</a>
								</li>
					
							<?php else: ?>
					
								<li class="nav-item">
									<a class="nav-link text-primary" href="login">Login</a>
								</li>
					
								<li class="nav-item">
									<a class="nav-link text-primary" href="register">Register</a>
								</li>
					
							<?php endif; ?>
					
						</ul>
					
					</div>

				</div>

			</nav>

			<?php if(isset($alert) && $alert !== ""): ?>
				<div class="alert alert-primary alert-dismissable fade show rounded-0 text-center">
					<span><?php echox($alert); ?></span>
					<button type="button" class="close" data-dismiss="alert">
						<span>&times;</span>
					</button>
				</div>
			<?php endif; ?>

		</header>

		<main class="container pt-4">
			
