<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'learn';

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {

	die('Could not connect: ' . mysqli_connect_error());
}
