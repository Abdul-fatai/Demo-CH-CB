<?php 
	include_once'header.php';
?>

<fieldset>
	
  <form class="form-group" action="/action_page.php">
    <legend>Login account <span></span></legend><hr>
    <label for="fname">Username or email address <span>*</span></label>
    <input type="text" id="fname" name="firstname" placeholder="" autofocus="">
    <a href="forgottenpwd.php"> Forgotten password ?</a>
    <label>Password <span>*</span></label>
    <input type="Password" name="pwd" placeholder="">
    <input type="submit" value="Submit">
  </form>

</fieldset>

<?php 
  include_once 'footer.php';
?>


