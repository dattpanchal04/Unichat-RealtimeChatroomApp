<?php
	
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "chatroom";

// Creating database connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if(!$conn)
{
	die("Failed to connect". mysqli_connect_error());
}

?>