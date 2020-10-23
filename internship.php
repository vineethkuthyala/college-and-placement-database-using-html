<?php 
include 'app/connect.php';

if(isset($_POST['submit'])){

	$INTERNSHIP_ID = $_POST['internship_id'];
	$COMPANYID = $_POST['companyid'];
	$DESCRIPTION = $_POST['description'];
	$LOCATION = $_POST['location'];
	$START_DATE = $_POST['startdate'];
	$END_DATE = $_POST['enddate'];
	$SKILLS = $_POST['skills'];
    
    //template for the sql query
	$sql = "INSERT INTO internship(	INTERNSHIP_ID,COMPANYID,DESCRIPTION,LOCATION,START_DATE,END_DATE,SKILLS) VALUES(?,?,?,?,?,?,?)";

	//preparing the statement
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("sissiis",$INTERNSHIP_ID ,$COMPANYID,$DESCRIPTION,$LOCATION,$START_DATE,$END_DATE,$SKILLS);
	$result = $stmt->execute();

	if($result){
		header("location:internship1.php");
	}else{
		echo "already placed";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="assets/internship.css">
</head>
<body>
	<form method="post" action="internship.php">
		<fieldset>
			<legend id="add" style="color: yellow;">ADD INTERNSHIP</legend>
			<br>
			<label for="INTERNSHIP_ID"> INTERNSHIP ID </label> 
				<input style="color: yellow;" type="text" name="internship_id" placeholder="Enter Internship ID" required >

			<label for="COMPANYID"> COMPANY ID </label> 			
				<input style="color: yellow;" type="text" name="companyid" placeholder="Enter Company Name" required >
			
			<label for="DESCRIPTION"> DESCRIPTION </label> 			
			<input style="color: yellow;" type="text" name="description" placeholder="Enter some description" >
			
			<label for="LOCATION"> LOCATION </label> 	
			<input style="color: yellow;" type="text" name="location"  placeholder="Enter internship location" >
			
			<label for="START_DATE"> START DATE </label> 
			<input type="DATE" name="startdate"  placeholder="Enter the internship start date" >

			<label for="END_DATE"> END DATE </label> 
			<input  type="DATE" name="enddate"  placeholder="Enter the internship end date" >

			<label for="SKILLS"> SKILLS </label> 
			<input style="color:yellow;" type="text" name="skills" placeholder="Enter the skills requried." >
			<br>
			<br>
		     <button type="submit" name="submit"><b> SUBMIT </b> </button>
			<br>
									<a href="trail2view.php" style="text-decoration: none;background: red; color:white;text-align:center;"> click to home </a><br>
						<br>
			<a href="internship1.php" style="text-decoration: none;background: red; color:white;text-align:center;"> click to view internship </a>

			<br>
			</fieldset>

	</form>
</body>
</html>