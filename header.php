<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Codershive</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <script>
  	// Jquery code here
  	$(document).ready(function(){
  		$("#form").submit(function(event){
  			event.preventDefault();
  			var firstname = $("#sign-firstname").val();
  			var lastname = $("#sign-lastname").val();
  			var username = $("#sign-username").val();
  			var email = $("#sign-email").val();
  			var day = $("#sign-day").val();
  			var month = $("#sign-month").val();
  			var year = $("#sign-year").val();
  			var gender = $("#sign-gender").val();
  			var password = $("#sign-password").val();
  			var Cpassword = $("#sign-Cpassword").val();
  			var submit = $("#sign-submit").val();

  			$(".form-message").load("sign.php", {
  				firstname: firstname,
  				lastname: lastname,
  				username: username,
  				email: email,
  				day: day,
  				month: month,
  				year: year,
  				gender: gender,
  				password: password,
  				Cpassword: Cpassword,
  				submit: submit

  			});

  		});
  	});
  </script>
</head>
<body>

	<header>
		<div class="container">
			<div id="branding">
			<a href="index.php">
				<img src="img/img.png" alt="logo">
			</a>
				<!-- <h2><a href="index.php">CODERSHIVE</a></h2> -->
			</div>
	<nav>
		<ul>
			<li id="login"><a href="login.php">Login</a></li>
			<li id="signup"><a href="index.php">Signup</a></li>

		</ul>
	</nav>
   </div>
</header>