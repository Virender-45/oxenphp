<?php
include("config.php");
?>


<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>

	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="data:image/jpeg;base64,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">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Learn</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Discover</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
				</ul>
				<form class="m-0" action="reg_form.php" method="POST">
					<input type="submit" name="button" value="SignUp/LogIn">
				</form>
			</div>
		</div>
	</nav>

    </body>
</html>