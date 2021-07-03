<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $email = $num =  $message = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$num = trim($_POST["number"]);
	$message = trim($_POST["message"]);
	echo "string";
  $sql = "INSERT INTO inquiry (name, email, num, message) VALUES (?, ?, ?, ?)";
	if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_name, $param_email, $param_num, $param_message);
						if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: contact.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Marble &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!--
	//////////////////////////////////////////////////////


	DESIGNED & DEVELOPED by Nikhil Panchal
	Email: nikhilpanchal355@gmail.com

	//////////////////////////////////////////////////////
	-->


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div  id="fh5co-page" style="background-image: url(images/img_bg_222.jpg) ">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.html">Mother stone & Granite<br><small><p style="font-size:15px">Gst-11111111111111111</p></small></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="">Portfolio</a></li>
					<li><a href="about.html">About Us</a></li>
					<li class="fh5co-active"><a href="contact.html">Contact</a></li>
					<li><a href="">Download broucher</a></li>
					<li><img src="images/logo.jpeg" height=10% width=60%></li>
				</ul>
			</nav>
			<br><br>
			<div class="fh5co-footer">
				<p><small>Copyright © 2021. All rights reserved by Mother Stone & Granite.</span> <span>Designed by <a href="https://www.linkedin.com/in/nikhil-panchal-307a071bb" target="_blank">Nikhil Pancahal</a> </span> </small></p>
				<ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="https://www.linkedin.com/company/mother-stone" target="_blank"><i class="icon-linkedin2"></i></a></li>
					</ul>
			</div>

		</aside>

		<div id="fh5co-main">
			<div class="fh5co-more-contact">
				<div class="fh5co-narrow-content">
					<div class="row">
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-globe"></i>
								</div>
								<div class="fh5co-text">
									<p><a href="mailto:motherstone21gmailcom">info@motherstone21.com</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-map"></i>
								</div>
								<div class="fh5co-text"><a href="https://www.google.com/maps/place/23%C2%B034'52.0%22N+73%C2%B006'22.1%22E/@23.5811195,73.1039542,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d23.5811195!4d73.1061429?hl=en">
									<p><b>Address: </b>Plot no.:18 & 19,<br>Gambhoi-Harsol Road,<br>Village-Dhundhar,Taluka-Himmatnagar Pin-383030</p>
								</div></a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="fh5co-text">
									<p><a href="tel:8097479931//">Tel-022-27866</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">

				<div class="row">
					<div class="col-md-4">
						<h2>Get In Touch</h2>
					</div>
				</div>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Name" required>
									</div>
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Email" required>
									</div>
									<div class="form-group">
										<input type="text" name="number" class="form-control" placeholder="Phone" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-md" value="submit">
									</div>
								</div>

							</div>
						</div>

					</div>
				</form>
			</div>
			<div><iframe  src="https://www.google.com/maps/embed/v1/place?q=304%2C%20banker%20house%2C%20ahmedabad&key=AIzaSyBsgDsNdm5ZWSXCDiPcc2PJYdskEZdBqGM" width="60%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>


	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	<div class="bg-modal">
	<div class="modal-contents">

		<div class="close">+</div>
		<img src="https://richardmiddleton.me/comic-100.png" alt="">

		<!--<form action="">
			<input type="text" placeholder="Name">
			<input type="email" placeholder="E-Mail">
			<a href="#" class="button">Submit</a>
		</form>-->
		<form action="">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Phone">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-md" value="Send Message">
									</div>
								</div>

							</div>
						</div>

					</div>
					<a href="#" id="button" class="button">Submit</a>
				</form>

	</div>
</div>
<script>
document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});
</script>

	</body>
</html>
