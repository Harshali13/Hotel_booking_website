<?php
//creating database at once
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "sakura_sky";

$conn = new mysqli($servername, $username, $password,$dbname);
/*
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
else
{
	echo "Connected succsesfully";
}
*/
$num=301;
$id=25761;


?>