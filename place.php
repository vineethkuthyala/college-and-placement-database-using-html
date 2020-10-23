<?php
include 'app/connect.php';
if(isset($_POST['submit'])){

	$USN = $_POST['USN'];
    $COMPANYID = $_POST['COMPANYID'];

	$sql = "INSERT INTO placements(USN,COMPANYID) VALUES (?,?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("si",$USN,$COMPANYID);
	$result=$stmt->execute();

	if($result){
		?> <script> alert("Record Successfully INSERTED from the Database."); </script>
	<?php
	}else{ ?>
		<script> alert("The  Operation was Unsuccessful"); </script>
	<?php
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="assets/place.css">
	
</head>
<body>

<form method="post" action="place.php">
	<fieldset>
	<label for="USN"> USN </label> 
	<input type="text" name="USN" placeholder="Enter Student USN" required >
<br>
<br><label for="COMPANYID">COMPANY ID</label> 
	<input type="text" name="COMPANYID" placeholder="Enter company id" required >

	<button type="submit" name="submit">SUBMIT</button>
				<a href="trail2view.php" style="text-decoration: none; color:white"> click to back? </a>
				<br>
				<br>
				<a href="viewplacement.php" style="text-decoration: none; color:white"> click to view placement? </a>
	</fieldset>
</form>
</body>
</html>