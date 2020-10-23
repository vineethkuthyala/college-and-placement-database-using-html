<?php
include 'app/connect.php';
if(isset($_POST['submit'])){
	$DEPARTMENT = $_POST['Department'];
	$GRADUATION_YEAR = $_POST['Year'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="assets/viewstudent.css">
	
	
</head>
<body>
	<form  method="post" action="viewstudent.php">
		<fieldset>
			<legend id="viewstudent" style="color: yellow;">VIEW STUDENT</legend>
			<br>
			
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
				<input  type="number" name="Year" min="2021" max="2099" step="1" value="2021" /><br>
			<button type="submit" name="submit"><b> SUBMIT </b> </button>
			<br>
			<a href="trail2view.php" style="text-decoration: none; color:rgb(0,255,255);"> click to home page </a>
			<br>
			</fieldset>
	</form>
	<table style="margin:auto;
	              table-layout: auto;width: 50%;
	              text-align: center;
	              margin-top: 50px;
	              font-family: arial;
	              font-size: 20px;
	              color: black;
	              background-size: 50%;
	              border:1px solid black;
	              border-collapse: collapse;
	              padding: 40px;
	              text-indent: 10px; ">
		<tr>
			<th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow;">USN</th>
			<th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow;">NAME</th>
			<th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow;">EMAIL</th>
		    <th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow;">PHONE</th>
			<th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow;">DEPARTMENT</th>
			<th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow;">GRADUATION_YEAR</th>
			


		</tr>
              

 

 


            <?php
			$sql = "SELECT * FROM student WHERE DEPARTMENT = ? AND GRADUATION_YEAR = ?";
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("si",$DEPARTMENT,$GRADUATION_YEAR);
			$stmt->execute();
			$result = $stmt->get_result();
			while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: rgb(255,255,153);
	                   " > <?php echo $row['USN']; ?> </td>
			<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: rgb(255,255,153);
	                   " > <?php echo $row['NAME']; ?> </td>
			<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: rgb(255,255,153);
	                   " > <?php echo $row['EMAIL']; ?> </td>
			<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: rgb(255,255,153);
	                   " > <?php echo $row['PHONE']; ?> </td>
			<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: rgb(255,255,153);
	                   " > <?php echo $row['DEPARTMENT']; ?> </td>
			<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: rgb(255,255,153);
	                   " > <?php echo $row['GRADUATION_YEAR']; ?> </td>
		</tr>
		<?php
			}
		?>
		</table>




</body>
</html>