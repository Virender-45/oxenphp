<?php
include("config.php");

$id = $_GET['id'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$pnum = $_GET['pnum'];
$city = $_GET['city'];
$email = $_GET['email'];
$status = $_GET['status'];
$age = $_GET['age'];
$code = $_GET['code'];

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
                    <select name="city" id="city" value="<?php echo $city ?>">
                        <option value="">Choose City</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="London">London</option>
                        <option value="Egypt">Egypt</option>
                    </select>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email" value="<?php echo $email ?>">
                    <select name="status" id="status" value="<?php echo $status ?>">
                        <option value="">Choose Status</option>
                        <option value="Married">Married</option>
                        <option value="UnMarried">UnMarried</option>
                    </select>
                    <input type="number" name="age" id="age" placeholder="Enter your Age" value="<?php echo $age ?>">
                    <input type="number" name="code" id="code" placeholder="Enter Your Postcode" value="<?php echo $code ?>"><br>
                    <input type="submit" name="submit" value="Update">
                </form>
            </div>
        </div>
    </div>
</body>
