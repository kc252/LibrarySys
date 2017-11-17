<?php 

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$username = mysqli_real_escape_string($conn , $_POST['username']);
	$password = mysqli_real_escape_string($conn , $_POST['password']);

	//Err Handling

	if (empty($username) || empty($password)) {

			header("Location: ../index.php?login=empty");
  			exit();
		
	}

	else {

		$result = mysqli_query($conn, "SELECT * FROM users WHERE Username = '$username'");
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) {

			header("Location: ../index.php?login=error");
  			exit();

		} else {


			if ($row = mysqli_fetch_assoc($result)) {
				//De-hash password

				$hashedPasswordCheck = password_verify($password, $row['Password']);


				if ($hashedPasswordCheck == false) {
						
						header("Location: ../index.php?login=error");
  						exit();

					} elseif ($hashedPasswordCheck == true) {
						
						// login the user here

						$_SESSION['username'] = $row['Username'];
						$_SESSION['password'] = $row['Password'];
						$_SESSION['FirstName'] = $row['FirstName'];
						$_SESSION['Surname'] = $row['Surname'];
						$_SESSION['AddressLine1'] = $row['AddressLine1'];
						$_SESSION['AddressLine2'] = $row['AddressLine2'];
						$_SESSION['City'] = $row['City'];
						$_SESSION['Telephone'] = $row['Telephone'];
						$_SESSION['Mobile'] = $row['Mobile'];

						header("Location: ../index.php?login=success");
  						exit();

					}	
			}
		}
	}

} else { 

  header("Location: ../index.php?login=error");
  exit();	

}
