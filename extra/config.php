<?php

$servername = "localhost";
$username = "root";
$password = " ";

$conn = mysqli_connect('localhost','root','','tour')

if(!$conn)
{
	die("connection faild: ".mysqli_connect_error());

};

echo "connected successfully";

?>