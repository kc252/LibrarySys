<?php 
	include_once 'header.php';

 ?>

	<section class="main-container">
		<div class="main-wrapper">
			<h2>Sign Up</h2>

			<form class="signup-form" action="includes/signup.inc.php" method="POST">

				<input type="text" name="username" placeholder="User Name">
				<input type="password" name="password" placeholder="Password">
				<input type="text" name="first" placeholder="First Name">
				<input type="text" name="last" placeholder="Surname">
				<input type="text" name="addr1" placeholder="Address Line 1">
				<input type="text" name="addr2" placeholder="Address Line 2">
				<input type="text" name="city" placeholder="City">
				<input type="text" name="Telephone" placeholder="Tel.Phone">
				<input type="text" name="Mobile" placeholder="Mobile Phone">
				
				<button type="submit" name="submit">Sign Up</button>

			</form>
		</div>
	</section>

	
<?php
	include_once 'footer.php';
  ?>
