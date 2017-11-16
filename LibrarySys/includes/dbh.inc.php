<?php

$db = "localhost";
$dbUserName = "root";
$dbPassword = '';

$conn = mysqli_connect($db, $dbUserName, $dbPassword);
mysqli_select_db($conn, "librarysys");

