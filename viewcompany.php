<?php
include 'app/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="assets/viewcompany.css">
	
	
</head>
<body style="background-image: url(viewcompany.jpg);">
	<form  method="post" action="viewcompany.php">


		
			<a href="company.php" style="	border:1px solid #d59aea;
	                                        border-radius:15px;
	                                        display: block;
	                                        text-decoration: none;
	                                        width:35%;
	                                        margin:5px auto;
	                                        padding: 5px;
	                                        background:rgb(0,255,0);
	                                        position: absolute;
	                                        right: 32%;
	                                        bottom:30%;
	                                        cursor:pointer;text-indent: 35%;"> click to add company  </a>
			<br>
			
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
	                   background-color: yellow;">COMPANYID</th>
			<th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow;">COMPANY NAME</th>
			<th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow;">EMAIL</th>
		    <th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow;">PHONE</th>
		
		</tr>
              

            <?php
			$sql = "SELECT * FROM COMPANY";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->get_result();
			while($row = $result->fetch_assoc()){
		?>
		<tr>
			<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: white;
	                   " > <?php echo $row['COMPANYID']; ?> </td>
			<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color:white;
	                   " > <?php echo $row['NAME']; ?> </td>
			<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color:white;
	                   " > <?php echo $row['EMAIL']; ?> </td>
			<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: white;
	                   " > <?php echo $row['PHONE']; ?> </td>
			
		</tr>
		<?php
			}
		?>
		</table>




</body>
</html>