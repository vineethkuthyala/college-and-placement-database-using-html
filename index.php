<?php
session_start();
if(!isset($_SESSION['NAME'])){

	header("location:login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="assets/index.css">
</head>
<body>

<div class="nav">
	<ul>
		<li><a href="" >HOME </a></li>
		<li><a href="" >ABOUT US </a></li>
		<li><a href="" >CONTACT US</a></li>
		<li><a href="logout.php" >LOG OUT </a></li>
	</ul>
</div>

	<h2> WELCOME! </h2>
	<h2><?php
         echo $_SESSION['NAME'];
         ?>
<!--<form method ="post" action="index.php">
	<fieldset>
		<label for="USN"> USN </label>
		<input type="text" name="USN" placeholder="enter the student USN" required="required">
		<button type="submit" name="submit">SUBMIT</button>
	</fieldset>
</form>-->
	 </h2>
</body>
</html>