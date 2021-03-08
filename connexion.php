<?php

$dbhost = "localhost:3308";
$dbuser = "root";
$dbpass = "root";
$dbname = "sign_in";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>