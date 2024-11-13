<title>Register</title>
<link rel="stylesheet" href="css/style.css">
<body>
	<div class="for-center">
		<div class="wrapper">
			<div class="reg-form" id="reg-form">
				<div class="form-heading">
					<h1>Welcome</h1>
					<p>Let's create your account!</p>
				</div>
				<div class="form-inner">
					<form action="saveform.php" method="POST">
						<input type="text" name="fname" id="fname" placeholder="First Name">
						<input type="text" name="lname" id="lname" placeholder="Last Name">
						<input type="number" name="pnum" id="pnum" placeholder="Enter Phone Number">
						<select name="city" id="city">
							<option value="">Choose City</option>
							<option value="Pakistan">Pakistan</option>
							<option value="London">London</option>
							<option value="Egypt">Egypt</option>
						</select>
						<input type="email" name="email" id="email" placeholder="Enter Your Email">
						<input type="password" name="password" id="password" placeholder="Enter Your Password">
						<select name="status" id="status">
							<option value="">Choose Status</option>
							<option value="Married">Married</option>
							<option value="UnMarried">UnMarried</option>
						</select>
						<input type="number" name="age" id="age" placeholder="Enter your Age">
						<input type="number" name="code" id="code" placeholder="Enter Your Postcode">
						<input type="file" name="pic" id="pic"><br>
						<input type="submit" name="submit" value="Register">
					</form>
				</div>
			</div>
		</div>
	</div>
