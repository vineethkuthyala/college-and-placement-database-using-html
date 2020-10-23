<?php
include 'app/connect.php';
if(isset($_POST['submit'])){

	$USN = $_POST['USN'];	
	/* $NAME = $_POST['NAME'];


	 $sql = "UPDATE student SET NAME =? WHERE USN = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ss",$NAME,$USN);
	$result  = $stmt->execute();
	if($result){

		echo "update sucessful!";

	}else{
		echo " error in update";

	}*/

	$sql  = "DELETE FROM student WHERE USN =?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s",$USN);
	$result=$stmt->execute();
	if($result){
		echo "deleted";
	}else{
		echo " invalid usn";
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
<form method="post" action="update.php">
<fieldset>
<label for="USN"> USN </label> 
<input type="text" name="USN" placeholder="Enter UserID" required >
<label for="name"> NAME </label> 
<input type="text" name="NAME" placeholder="Enter name" required >
<button type="submit" name="submit"><b> SUBMIT </b> </button>
         <br>
     </fieldset>
 </form>
 </body>