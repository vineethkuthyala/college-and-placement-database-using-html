<?php
include 'app/connect.php';
if(isset($_POST['submit'])){

	$COMPANYID = $_POST['COMPANYID'];
	$NAME = $_POST['Name'];
	$EMAIL = $_POST['Email'];
	$PHONE = $_POST['phone'];
	
    $company_check = "SELECT * FROM company WHERE COMPANYID =? ";
    $company_stmt =  $conn->prepare($company_check);
    $company_stmt->bind_param("i",$COMPANYID);
    $company_stmt->execute();
    $company_stmt->store_result();
    if($company_stmt->num_rows()>0){
   ?>
    	<script> alert("company  already saved");
    	</script>
    	<?php

    }else{



	//template for the sql query
	$sql = "INSERT INTO company(COMPANYID,NAME,EMAIL,PHONE) VALUES(?,?,?,?)";

	//preparing the statement
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("issi",$COMPANYID,$NAME,$EMAIL,$PHONE);
	$result = $stmt->execute();

	if($result){
		header("location:viewcompany.php");
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
	<link rel="stylesheet" href="assets/company.css">
  
    </head>
    <body>
	<form  method="post" action="company.php">
		<fieldset>
			<legend id="company" style="color: yellow;">COMPANY DETAILS</legend>
			<br>
			<label for="companyid"> COMPANY ID </label> 
				<input  style="color: white;" type="text" name="COMPANYID" placeholder="Enter COMPANYID" required >
             <br>
             <br>
			<label for="Name"> COMPANY NAME </label> 			
				<input style="color: white;" type="text" name="Name" placeholder="Enter company Name" required >
			             <br>
             <br>
			<label for="Email"> COMPANY EMAIL </label> 			
			<input style="color: white;" type="email" name="Email" placeholder="Enter company Email-Id"required >
			
             <br>
             <br>

			<label for="mobile"> MOBILE NUMBER </label> 
			<input style="color: white;" type="tel" name="phone" placeholder="Enter  mobile no." maxlength="10" required >
			             <br>
             <br>
			<button type="submit" name="submit"><b> SUBMIT </b> </button>
		
			      
         <a href="trail2view.php" target="_bank"; style="border:1px solid #d59aea;border-radius:15px;display: block;width:35%;         margin:5px auto;padding: 5px;background:rgb(0,255,0);cursor:pointer; text-decoration: none;font-weight: bold; text-indent: 18%;"> home page </a>
	        
	          
			</fieldset>
	</form>
</body>
</html>