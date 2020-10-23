
<?php
include 'app/connect.php';
if(isset($_POST['submit'])){
$USN = $_POST['usn'];
$NAME = $_POST['name'];
$EMAIL = $_POST['email'];
$PASSWORD = $_POST['password'];
$PHONE = $_POST['phone'];
$DEPARTMENT = $_POST['department'];
$GRADUATION_YEAR =  $_POST['graduation_year'];


$sql = "INSERT INTO student(USN,NAME,EMAIL,PASSWORD,PHONE,DEPARTMENT,	GRADUATION_YEAR) VALUES(?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssisi",$USN,$NAME,$EMAIL,$PASSWORD,$PHONE,$DEPARTMENT,$GRADUATION_YEAR);
$result = $stmt->execute();
if($result){
	header("location :login.php");
}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>vineeth personal detail</title>
	</head>
	<body>
		<form action="form.php" method="post">
			<h1>forms</h1>
<fieldset>
<legend>personal detail</legend>

			<label for="usn">usn</label><br>
			<input type="text" name="usn" maxlength="15" placeholder="enter your usn." required="required"><br><br>


			<label for="name">name</label><br>
			<input type="text" name="name" maxlength="15" placeholder="enter your name." required="required"><br><br>


             <label for="email">email </label><br> 
			<input type="email" name="email"  placeholder="enter your email id." required="required"><br><br>



			<label for="password">password</label><br>
			<input type="password" name="password"  placeholder="enter your password." required="required"><br>
			<br>


			<label for="phone">phone</label><br>
			<input type="phone" name="phone"  placeholder="enter your phone." required="required"><br>
			<br>

	


<label for="department">department</label>
<select name="department" required="required">
	<option value="cse">computer science</option>
<option value="ec">electronis</option>
<option value="me">mechanical</option>
<option value="cv">civil</option></select>

<br><br>


			<label for="graduation_year">graduation year</label><br>
			<input type="text" name="graduation_year"  placeholder="enter your graduation_year." required="required"><br>
			<br>


</fieldset>


<br><br>
<input type="submit" name="submit">
			


		</form>
</body>
</html>