<?php
include "config.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pnum = $_POST['pnum'];
$email = $_POST['email'];
$password = $_POST['password'];
$city = $_POST['city'];
$age = $_POST['age'];
$code = $_POST['code'];
$username = $fname . '_' . $lname;
$status = $_POST['status'];

$sql = "INSERT INTO users (id, firstname, lastname, phonenumber, email, password, city, age, code, username, status)
	VALUES(NULL,'$fname','$lname', '$pnum','$email','$password', '$city','$age', '$code', '$username', '$status')"; //users() are keys, values() are value of the key
if (mysqli_query($conn, $sql)) {

	// echo "Record inserted successfully";
	header("Location: http://localhost/main2/user/index.php");
} else {
	echo "Could not insert record: " . mysqli_error($conn);
}

mysqli_close($conn);