<?php

	include_once '../config/dbh.php';
	if (isset($_POST['submit'])) {
		
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$Cpassword = $_POST['Cpassword'];

		$errorEmpty = false;
		$errorEmail = false;
		$errorUserTaken = false;
		$errorPassword = false;
		$errorPasswordlength = false;

		if (empty($firstname) || empty($lastname) || empty($email) || empty($day) || empty($month) || empty($year) || empty($gender) || empty($password) || empty($Cpassword)) {
			echo "<div class='form-error'>All field are required</div>";
			$errorEmpty = true;

		} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo "<div class='form-error'>Invalid email address</div>";
			$errorEmail = true;

		} else  {
			$sql = "SELECT * FROM users WHERE username='$username'";
			$query = mysqli_query($conn, $sql);
			$resultcheck = mysqli_num_rows($query);

			if ($resultcheck > 0) {
			echo "<div class='form-error'>Username already exit</div>";
			$errorUserTaken = true;

			} else {
				if ($password != $Cpassword) {
				echo "<div class='form-error'>Password didn't match</div>";
			    $errorPassword = true;
				} else{
					if (strlen($password) < 8) {
						echo "<div class='form-error'>Passwords must contain at least eight characters</div>";
						$errorPasswordlength = true;
					} else {
						
						echo "<div class='form-success'>Check your e-mail to verify your account</div>";
						
					}
				}
			}
		}

	} else{
		echo "There was an error";
	}

?>

<script>
	$("#sign-firstname, #sign-lastname, #sign-username, #sign-email, #sign-day, #sign-month, #sign-year, #sign-gender, #sign-password, #sign-Cpassword").removeClass("input-error");

	var errorEmpty = "<?php echo  $errorEmpty; ?>";
	var errorEmail = "<?php echo  $errorEmail; ?>";
	var errorUserTaken = "<?php echo $errorUserTaken; ?>"
	var errorPassword = "<?php  echo $errorPassword; ?>";
	var errorPasswordlength = "<?php echo $errorPasswordlength ?>"

	if (errorEmpty == true) {
		$("#sign-firstname, #sign-lastname, #sign-username, #sign-email, #sign-day, #sign-month, #sign-year, #sign-gender, #sign-password, #sign-Cpassword").addClass("input-error");
	}
	if (errorPasswordlength == true) {
		$("#sign-password").addClass("input-error");
	}
		
	if (errorEmail == true) {
		$("#sign-email").addClass("input-error");
	}
	if (errorUserTaken == true) {
		$("#sign-username").addClass("input-error");
	}
		
	if (errorPassword == true) {
		$("#sign-Cpassword").addClass("input-error");
	} 
	if (errorEmpty == false && errorEmail == false && errorUserTaken == false && errorPassword == false && errorPasswordlength == false) {
		$("#sign-firstname, #sign-lastname, #sign-username, #sign-email, #sign-day, #sign-month, #sign-year, #sign-gender, #sign-password, #sign-Cpassword").val("");
		$("#sign-firstname, #sign-lastname, #sign-username, #sign-email, #sign-day, #sign-month, #sign-year, #sign-gender, #sign-password, #sign-Cpassword").addClass("input-success");
	}
</script>