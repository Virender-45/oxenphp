<?php
include("config.php");

$id = $_GET['id'];


$query_for_display = "SELECT * FROM users where id = $id";
$data = mysqli_query($conn, $query_for_display);

$total = mysqli_fetch_assoc($data);

//echo "<pre>"; print_r($total); 


$fname = $total['firstName'];
$lname = $total['lastName'];
$pnum = $total['phonenumber'];
$city = $total['city'];
$email = $total['email'];
$status = $total['status'];
$age = $total['age'];
$code = $total['code']; 

?>

<title>Edit Details</title>
<link rel="stylesheet" href="css/style.css">

<body>
    <div class="for-center">
        <div class="wrapper">
            <div class="reg-form" id="reg-form">
                <form action="edit.php" method="POST">
                    <input type="hidden" name="id" id="id" placeholder="First Name" value="<?php echo $id ?>">
                    <input type="text" name="fname" id="fname" placeholder="First Name" value="<?php echo $fname ?>">
                    <input type="text" name="lname" id="lname" placeholder="Last Name" value="<?php echo $lname ?>">
                    <input type="number" name="pnum" id="pnum" placeholder="Enter Phone Number" value="<?php echo $pnum ?>">
					<select name="city" id="city">
						<option value="">Choose City</option>
						<option value="Pakistan" <?php if ($city == "Pakistan") echo "selected"; ?>>Pakistan</option>
						<option value="London" <?php if ($city == "London") echo "selected"; ?>>London</option>
						<option value="Egypt" <?php if ($city == "Egypt") echo "selected"; ?>>Egypt</option>
				   </select>
				   <input type="email" name="email" id="email" placeholder="Enter Your Email" value="<?php echo $email; ?>">
				   <select name="status" id="status">
						<option value="">Choose Status</option>
						<option value="Married" <?php if ($status == "Married") echo "selected"; ?>>Married</option>
						<option value="UnMarried" <?php if ($status == "UnMarried") echo "selected"; ?>>UnMarried</option>
					</select>
                    <input type="number" name="age" id="age" placeholder="Enter your Age" value="<?php echo $age ?>">
                    <input type="number" name="code" id="code" placeholder="Enter Your Postcode" value="<?php echo $code ?>"><br>
                    <input type="submit" name="submit" value="Update">
                </form>
            </div>
        </div>
    </div>
</body>
