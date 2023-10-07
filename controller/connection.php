<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dailyjournal";

if(!$conn = mysqli_connect($servername,$username,$password,$dbname))
{
	die("Connection failed");
}
?>