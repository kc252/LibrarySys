<?php 

session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel = "stylesheet" type = "text/css" href="style.css">
</head>
<body>

	<header>
		<nav>
			
			<div class ="main-wrapper">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>

				</ul>



				<div class = "nav-login">

					<a href="search.php">Search</a>

					<?php
						if (isset($_SESSION['username'])) {

						echo '<form action="includes/logout.inc.php" method="POST">
						<button type="submit" name="submit">Logout</button></form>'; 

						}

						else {

						echo '<form action="includes/login.inc.php" method="POST">
						<input type="text" name="username" placeholder="Username">
						<input type="password" name="password" placeholder="Password">
						<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign Up</a>';

						}


					  ?>
					
				</div>
			</div>

		</nav>




	</header>

