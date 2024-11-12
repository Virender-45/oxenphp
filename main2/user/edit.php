<?php
include("config.php");

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pnum = $_POST['pnum'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$status = $_POST['status'];
	$age = $_POST['age'];
	$code = $_POST['code'];

	$query = "UPDATE users SET firstName='$fname', lastName='$lname', phonenumber='$pnum', email='$email', city='$city', age='$age', code='$code', status='$status' WHERE id='$id'";
	$data = mysqli_query($conn, $query);

	if ($data) {
		header("Location: http://localhost/main2/user/index.php");
		exit();
	} else {
		echo "Data not updated";
	}
} else {
	echo "Invalid request";
}
?>
