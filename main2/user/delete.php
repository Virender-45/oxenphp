<?php
include("config.php");

$id = $_GET['id'];
$query = "DELETE FROM users WHERE id = '$id'";


$data = mysqli_query($conn, $query);

if ($data) {
    // echo "Data Deleted";
    header("Location: http://localhost/main2/user/index.php");
}