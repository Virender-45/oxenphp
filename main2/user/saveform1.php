<?php
include "config.php";
//table 1 users
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pnum = $_POST['pnum'];
$email = $_POST['email'];
$password = $_POST['password'];

//table 2 info
$age = $_POST['age'];
$city = $_POST['city'];
$code = $_POST['code'];
$username = $fname . '_' . $lname;
$status = $_POST['status'];



$sql1 = "INSERT INTO users (id, firstname, lastname, phonenumber, email, password)
VALUES(NULL,'$fname','$lname', '$pnum','$email','$password')"; //users() are keys, values() are value of the key

$sql2 = "INSERT INTO info (id, age, city, code, username, status) VALUES(NULL, '$age', '$city', '$code', '$username', '$status')";

$data = mysqli_query($conn, $sql1);
$data2 = mysqli_query($conn, $sql2);

if ($data) {

	// echo "Record inserted successfully";
	header("Location: http://localhost/main2/user/index.php");
} else {
	echo "Could not insert record: " . mysqli_error($conn);
}

mysqli_close($conn);
