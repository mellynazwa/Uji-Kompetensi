<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dbalumni";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}