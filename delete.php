<?php
include 'app/connect.php';
if(isset($_POST['submit'])){

	$USN = $_POST['USN'];
	$sql = "DELETE FROM student WHERE USN = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s",$USN);
	$result=$stmt->execute();

	if($result){
		?> <script> alert("Record Successfully Deleted from the Database."); </script>
	<?php
	}else{ ?>
		<script> alert("The delete Operation was Unsuccessful"); </script>
	<?php
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="assets/login.css">
	<link rel="stylesheet" href="assets/index.css">
</head>
<body>

<form method="post" action="delete.php">
	<fieldset>
	<label for="USN"> USN </label> 
	<input type="text" name="USN" placeholder="Enter Student USN" required ">

	<button type="submit" name="submit">SUBMIT</button>
	</fieldset>
</form>
</body>
</html>