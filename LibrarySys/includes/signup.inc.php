<?php

if(isset($_POST['submit'])) {

	include_once 'dbh.inc.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$surname = mysqli_real_escape_string($conn, $_POST['last']);
	$addr1 = mysqli_real_escape_string($conn, $_POST['addr1']);
	$addr2 = mysqli_real_escape_string($conn, $_POST['addr2']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$tel= mysqli_real_escape_string($conn, $_POST['Telephone']);
	$mobile = mysqli_real_escape_string($conn, $_POST['Mobile']);

	//Err handles


	if (empty($username) || empty($password) || empty($first) || empty($surname) || empty($addr1) || empty($addr2) || empty($city) || empty($tel) || empty($mobile)) {

		header("Location: ../signup.php?signup=empty");
		exit(); 


	} else {

		// check if input valid

		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ) {
			header("Location: ../signup.php?signup=invalid");
		exit(); 

		} else{ 

			$sql = "SELECT * FROM users WHERE user_username = '$uid'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0) {
				header("Location: ../signup.php?signup=usertaken");
				exit();
			} 

			else {

				//hash pword
				$hashedPword = password_hash($password, PASSWORD_DEFAULT);

				//insert values
				mysqli_query($conn, "INSERT INTO users (Username , Password, FirstName, Surname, AddressLine1, AddressLine2, City, Telephone, Mobile) VALUES ('$username','$hashedPword','$first','$surname','$addr1','$addr2','$city','$tel','$mobile')");

				header("Location: ../signup.php?signup=success");
				
				exit();

			}


		}
	}

}

	 else {

	header("Location: ../signup.php");

	exit();
}