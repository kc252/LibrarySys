<?php

$output = '';

if (isset($_POST['search'])) {

	include 'dbh.inc.php';

	$search = $_POST ['search'];

	$query = mysqli_query($conn, "SELECT * from books WHERE BookTitle LIKE '$search' OR Author LIKE '$search'");

	$count = mysqli_num_rows($query);


	if ($count == 0) {

		$output = 'There was no search results!';
	}

	else{

		while($row = mysqli_fetch_assoc($query)){

			$bookTitle = $row['BookTitle'];
			$author = $row ['Author'];

			$output = '<div>Name: ' . $bookTitle . '<br>Author: ' . $author . '</div>';

		}

		

	}

	print($output) ;

	header("Location: ../index.php?search=success");
	
}