<?php
include 'app/connect.php';
if (isset($_POST['SUBMIT'])) {
	$DEPARTMENT = $_POST['DEPARTMENT'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/login.css">
</head>
<body>

<form method="post"></form>
      <fieldset>
         <label for="DEPT">DEPARTMENT</label>
         <input type="text" name="DEPARTMENT">
         <button type="submit" name="submit"><b> GENERATE</b> </button>
</fieldset>
</form>

<br><br>
<table>
	


	<tr>
		<th>USN</th>
		<th>NAME</th>
		<th>EMAIL</th>
</tr>
<?php
$sql = "SELECT * FROM  student WHERE DEPARTMENT = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$DEPARTMENT);
$stmt->execute();
$result = $stmt->get_result();
while($row = $result->fetch_assoc()){


?>
<tr>
				<td><?php echo $row['USN']; ?> </td>
				<td><?php echo $row['NAME']; ?> </td>
				<td><?php echo $row['EMAIL']; ?> </td>	




</tr>
<?php
}
?>

</table>



</body>
</html>