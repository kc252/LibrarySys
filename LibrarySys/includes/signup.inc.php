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

		header("Location: ../signup.php?signup=empty")
		exit(); 


	} else {

		// check if input valid

		if (!preg_match("/^[a-zA-Z]*$", $first) || !preg_match("/^[a-zA-Z]*$", $last) ) {
			header("Location: ../signup.php?signup=invalid")
		exit(); 
		} else{

			
		}
	}

	

} else {
	header("Location: ../signup.php")
	exit();
}