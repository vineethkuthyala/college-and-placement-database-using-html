<?php 
include 'app/connect.php';

if(isset($_POST['submit'])){

	$USN = $_POST['USN'];
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$Confirm = $_POST['ConfirmPassword'];
	$Phone = $_POST['Phone'];
	$Department = $_POST['Department'];
	$GraduationYear = $_POST['Year'];

	$pass = password_hash($Password, PASSWORD_DEFAULT);
	//echo $pass;
    $usn_check = "SELECT * FROM student WHERE USN =? ";
    $usn_stmt =  $conn->prepare($usn_check);
    $usn_stmt->bind_param("s",$USN);
    $usn_stmt->execute();
    $usn_stmt->store_result();
    if($usn_stmt->num_rows()>0){
   ?>
    	<script> alert("user already registered");
    	</script>
    	<?php

    }else{



	//template for the sql query
	$sql = "INSERT INTO student(USN,NAME,EMAIL,PASSWORD,PHONE,DEPARTMENT,GRADUATION_YEAR) VALUES(?,?,?,?,?,?,?)";

	//preparing the statement
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ssssisi",$USN,$Name,$Email,$pass,$Phone,$Department,$GraduationYear);
	$result = $stmt->execute();

	if($result){
		header("location:login.php");
	}

}
}
/*
	$expectedData = 1;
	$spoiledData = "1; DROP TABLE student";
	$query = "select * from student where USN = $spoiledData";
	select * from student where USN=1; 
	Drop table student;
*/

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="assets/registration.css">
	
	<script type="text/javascript">
		function validate(){
			var pwd1 = document.getElementById("password");
			var pwd2 = document.getElementById("confirmPassword");

			if(pwd1.value.length < 6){
				alert("Password must have more than Six characters.");
				return false;
			}
			else{
				if(pwd1.value != pwd2.value){
					alert("Passwords do not match. Re-Enter it.");
					return false;
				}
				else{
					return true;
				}
			}
		}

	</script>
</head>
<body>
	<form onsubmit="return validate()" method="post" action="registration.php">
		<fieldset>
			<legend id="reg" style="color: yellow;">REGISTER</legend>
			<br>
			<label for="USN"> USN </label> 
				<input type="text" name="USN" placeholder="Enter UserID" required >

			<label for="Name"> NAME </label> 			
				<input type="text" name="Name" placeholder="Enter Name" required >
			
			<label for="Email"> EMAIL </label> 			
			<input type="email" name="Email" placeholder="Enter Email-Id" >
			
			<label for="Password"> PASSWORD </label> 	
			<input type="password" name="Password" id="password" placeholder="Enter Password" >
			
			<label for="Password"> CONFIRM PASSWORD </label> 
			<input type="password" name="ConfirmPassword" id="confirmPassword" placeholder="Re-Enter Password" >

			<label for="mobile"> MOBILE NUMBER </label> 
			<input type="tel" name="Phone" placeholder="Enter valid mobile no." maxlength="10" >
			
			<label for="Department"> DEPARTMENT </label> 			
				<select name="Department">
					<option value="">Select...</option>
					<option value="CSE">Computer Science Engineering</option>
  					<option value="MECH">Mechanical Engineering</option>
  					<option value="IEM">Industrial Engineering and Management</option>
  					<option value="CIVIL">Civil Engineering</option>
  					<option value="ISE">Information Science Engineering</option>
  					<option value="ECE">Electronics and Communication Engineering </option>
  					<option value="EIE">Electronics and Instrumentation Engineering </option>
  				</select> 
  				
				<label for="GraduationYear"> GRADUATION YEAR </label>
				<input type="number" name="Year" min="2021" max="2099" step="1" value="2021" /><br>
			<button type="submit" name="submit"><b> SUBMIT </b> </button>
			<br>
			<a href="login.php" style="text-decoration: none; color:white"> Already Have an Account? </a>
			<br>
			</fieldset>
	</form>
</body>
</html>