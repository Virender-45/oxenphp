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

	<div class="text-center">
		<h1>Here is the data</h1>
	</div>


	<div class="container mt-4">
		<?php include 'display.php'; ?>
	</div>





	<div class="section-1" style="background-image: url('images/bg1.jpg');">
		<div class="container">
			<div class="s1-content">
				<h1>Love Where You're Going</h1>
				<p>Book incredible things to do around the world.</p>
				<a href="#"><button>Read More</button></a>
				<img src="images/line.png" alt="">
			</div>
		</div>
	</div>


	<div class="section-2">
		<div class="container">
			<div class="row s2-content ">
				<div class="col-lg-6 col-md-6 col-sm-12 text-block-1">
					<h2>Essential Weekend Getaways</h2>
					<p>Our travel guides, which are curated by Travel + Leisure editors and a network of local
						correspondents, highlight the best hotels, restaurants, shops, bars, and things to do in the world's
						most exciting destinations. Browse our in-depth travel information for great ideas and insider
						finds, plus smart travel tips that will have you feeling like a local in no time.</p>
				</div>
			</div>
		</div>
	</div>


	<div class="section-3">
		<div class="container">
			<div class="row s3-content">
				<div class="col-lg-6 col-md-6 col-sm-12 s3-content-layout1">
					<div class="test1">
						<img src="images/1.jpeg">
						<h2>The greatest islands, cities, hotels, cruise lines, airports, and more — as voted by you.</h2>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 s3-content-layout2">
					<div class="test2">
						<img class="s3-img2" src="images/travel.png">
						<img class="s3-img1" src="images/2.jpeg">
					</div>
					<p>Year to year, we see our readers’ travel habits shift, as some destinations suddenly explode in
						popularity (hello, Portugal and Iceland) and others experience a cooling, perhaps due to
						geopolitical events or an unfavorable exchange rate. And this, of course, trickles down into our
						World’s Best results, particularly when it comes to ranking the top 100 hotels on the planet.
					</p>
					<a href="#"><button>Read More</button></a>
				</div>
			</div>
		</div>
	</div>


	<div class="section-4">
		<div class="container-layout">
			<div class="row s4-content gx-0">
				<div class="col-lg-4 col-md-4 col-sm-12 s4-ontent-layout1">
					<img class="s4-img1" src="images/3.jpeg" alt="">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 s4-ontent-layout2">
					<h2>Planning Your Travels is Easier Than You Think</h2>
					<ul>
						<li>Tested travel tips from years of experience.</li>
						<li>Interviews with other travel experts.</li>
						<li>Case studies and profiles of other travelers from various backgrounds, genders, colors, and
							nationalities.</li>
						<li>A community of supportive travelers to help encourage you to keep going.</li>
					</ul>
					<p>If you’ve ever wanted to learn how to travel cheaper, turn your dream trip into a reality, save
						money, or travel the world, you are in the right place! This website will give you tested tips,
						advice, and suggestions so you can see more for less and make your dream trip a reality.</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 s4-ontent-layout3">
					<img class="s4-img2" src="images/4.jpeg" alt="">
				</div>
			</div>
		</div>
	</div>


	<div class="section-5">
		<div class="container">
			<div class="row s5-content pt-5">
				<div class="col-lg-5 col-md-5 col-sm-12 s5-content-layout1">
					<h2>The Top 100 Hotels in the World</h2>
					<p>Year to year, we see our readers’ travel habits shift, as some destinations suddenly explode in
						popularity (hello, Portugal and Iceland) and others experience a cooling, perhaps due to
						geopolitical events or an unfavorable exchange rate. And this, of course, trickles down into our
						World’s Best results, particularly when it comes to ranking the top 100 hotels on the planet. </p>
					<a href="#"><button>Read More</button></a>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 s5-content-layout2">
					<div class="test3">
						<img class="s5-img1" src="images/map.png">
						<img class="s5-img2" src="images/europe.png">
					</div>
					<p>Everyday I wake up with one goal in mind” <span style="font-weight: bold">“How can I help other
							people travel better for less?”</span> The
						mission here is to produce the most comprehensive than any other website out there. Why?</p>
				</div>
			</div>
		</div>
	</div>


	<div class="section-6">
		<div class="container">
			<div class="row s5-content ">
				<div class="col-lg-6 col-md-6 col-sm-12"></div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-block-2">
					<h2>Plan Your Adventure</h2>
					<p>This Great Land is full of wonders. But it would take a lifetime to explore them all! So let us help
						you get started, with page after page of FREE official Alaska travel information -- chosen just for
						you! Don't wait another year -- or even another minute. Take a first step toward Alaska right now!
					</p>
					<img src="images/starrr.png">
					<img src="images/starrr.png">
					<img src="images/starrr.png">
					<img src="images/starrr.png">
				</div>
			</div>
		</div>
	</div>


	<div class="section-7">
		<div class="container">
			<div class="row s7-content">
				<div class="col-lg-6 col-md-12 col-sm-12 s7-content-layout1">
					<img src="images/5.jpeg" alt="">
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 s7-content-layout2">
					<div class="test4">
						<img class="s7-img1" src="images/6.jpeg">
						<img class="s7-img2" src="images/adventure.png">
					</div>
					<div class="text-block-3">
						<h2>We’ve Got Top Travel Tips Just For You</h2>
						<p>We sleep in dorms and budget hotels, wait hours for buses, try those roadside street stalls, and
							test travel passes to see if they really do save money. We do it just like you would – because,
							like you, we’re real travelers looking to see the world and help others do the same.</p>
					</div>
				</div>
			</div>
		</div>
	</div>










	<footer class="bg-dark text-white text-center text-lg-start mt-5">
		<div class="container p-4">
			<div class="row">

				<!-- Column 1-->
				<div class="col-lg-3 col-md-6 mb-4 mb-md-0 hh">
					<h5 class="text-uppercase mb-4">About Us</h5>
					<img src="data:image/jpeg;base64,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" alt="Brand Logo" class="img-fluid mb-3" style="max-width: 150px;">
					<p>
						We are dedicated to providing the best service to our customers. Stay connected with us for more updates.
					</p>
				</div>

				<!-- Column 2-->
				<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
					<h5 class="text-uppercase mb-4">Quick Links</h5>
					<ul class="list-unstyled">
						<li><a href="#!" class="text-white">Home</a></li>
						<li><a href="#!" class="text-white">Services</a></li>
						<li><a href="#!" class="text-white">Contact</a></li>
						<li><a href="#!" class="text-white">About</a></li>
					</ul>
				</div>

				<!-- Column 3-->
				<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
					<h5 class="text-uppercase mb-4">Follow Us</h5>
					<ul class="list-unstyled">
						<li><a href="#!" class="text-white">Facebook</a></li>
						<li><a href="#!" class="text-white">Twitter</a></li>
						<li><a href="#!" class="text-white">Instagram</a></li>
					</ul>
				</div>

				<!-- Column 4-->
				<div class="col-lg-3 col-md-6 mb-4 mb-md-0">
					<h5 class="text-uppercase mb-4">Feedback</h5>
					<form action="" method="POST">
						<div class="mb-3">
							<input type="email" class="form-control mb-3" name="fmail" placeholder="Your email address" required>
							<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
						</div>
						<button type="submit" name="fbtn" class="btn btn-primary">Submit</button>
					</form>
					<div class="fdisplay mt-4">
						<?php
						if (isset($_POST['fbtn'])) {
							echo "Thanks! for your feedback";
						}
						?>
					</div>
				</div>

			</div>
		</div>
		<!-- Copyright -->
		<div class="text-center p-3 bg-secondary">
			© 2024 Your Company Name
		</div>
	</footer>



	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
