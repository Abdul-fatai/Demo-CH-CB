<?php 
	include_once'header.php';
?>


<fieldset>
  <form id="form" class="form-group" action="" method="POST">
  	<legend>Create coder account</legend><hr>
    <p>It's free and always will be.</p>
    <div>
        <p class="form-message"></p>
    </div>
    <label>First name <span>*</span></label>
    <input id="sign-firstname" type="text" name="firstname" autofocus="">

    <label>Last name <span>*</span></label>
    <input id="sign-lastname" type="text"  name="lastname">

    <label>Username <span>*</span></label>
    <input id="sign-username" type="text" name="">

    <label>Email address <span>*</span></label>
    <input id="sign-email" type="text" name="email">

    <label>Date of birth <span>*</span></label><br>
    <select id="sign-day" name="day">
    	<option disabled selected value="day">Day</option>
    	<option>1</option>
    </select>
    <select id="sign-month" name="month">
    	<option disabled selected value="month">Month</option>
    	<option>08</option>
    </select>
    <select id="sign-year" name="year">
    	<option disabled selected value="year">Year</option>
    	<option>2019</option>
    </select>
    
    <label>Gender <span>*</span></label><br>
    <select id="sign-gender" name="gender">
        <option disabled selected>Select gender</option>
        <option value="male">Male</option>
        <option value="Female">Female</option>
    </select>
    <label>Password <span>*</span></label>
    <input id="sign-password" type="Password" name="pwd">
    <i>Passwords must contain at least eight characters</i><br>

    <label>Repeat password <span>*</span></label>
    <input id="sign-Cpassword" type="Password" name="Cpwd">

    <p id="sign-p">By clicking Create an account, you agree to our <a href="#">Terms and Conditions</a></p>
    <input id="sign-submit" type="submit" value="Create account">
  </form>

</fieldset>


<?php 
include_once'footer.php';

?>