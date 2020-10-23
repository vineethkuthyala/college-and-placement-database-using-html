<?php
include 'app/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		body{
			background-image: url(inter.png);
			background-size: 100%;
			
		}
		a:link{
			font-size:10px;
		}
		a:visited{
			color: black;
		}
		a:hover{
			font-size: 10px;
		}
		a:focus{
			background: yellow;
		}
	</style>
</head>
<body>
	<a style="color: rgb(0,255,0);" href="place.php">click here to get into previous page</a>
	<h1 style="text-align:  center;	border:1px solid yellow;
	           border-radius:15px;
	           display: block;
	           width:20%;
	           background-color: blue;
	           margin:40px auto;
	           padding: 5px;"><b>PLACEMENT VIEW</b></h1>
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
	                   background-color: yellow;" >USN</th>
	        <th style="border:1px solid black;
	                   border-collapse: collapse;
	                  background-color: yellow; " >NAME</th>

            <th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow; " >COMPANYID</th>

			<th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow; " >COMPANY_NAME</th>
			<th style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: yellow; " >LOCATION</th>


		</tr>
		<?php
	    $sql  ="SELECT s.USN,s.NAME,c.COMPANYID,c.NAME,i.LOCATION FROM company c,internship i, placements p ,student s WHERE c.COMPANYID = i.COMPANYID AND s.USN = p.USN AND p.COMPANYID = C.COMPANYID ";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$result=$stmt->get_result();
		while($row=$result->fetch_assoc()){
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
	                   " > <?php echo $row['COMPANYID']; ?> </td>
				<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: rgb(255,255,153);
	                   " > <?php echo $row['NAME']; ?> </td>
				<td style="border:1px solid black;
	                   border-collapse: collapse;
	                   background-color: rgb(255,255,153);
	                   " > <?php echo $row['LOCATION']; ?> </td>

				
			</tr>
			<?php

		}
      ?>
	</table>

</body>
</html>