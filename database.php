<!-- <?php

$hostname     = "localhost"; // replace with your hostname
$username     = "root";     // replace with your username
$password     = "";        // replace with your username
$databasename = "db_blog"; // replace with your database name
// Create connection
$connection = mysqli_connect($hostname, $username, $password,$databasename);
// Check connection
if (!$connection) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?> -->


<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="db_blog";
	/* Create connection */
	$conn = mysqli_connect($servername, $username, $password,$db);
?>