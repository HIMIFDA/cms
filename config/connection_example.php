<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'your_database');

// Check connection
if (mysqli_connect_errno()) {
	var_dump('Failed to connect to MySQL: ' . mysqli_connect_error());
	die();
}

?>