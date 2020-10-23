<?php
include 'app/connect.php';
if(isset($_POST['submit'])){
   $COMPANYID = $_POST['companyid'];
   $NAME = $_POST['name'];

   $sql = "DELETE FROM company WHERE COMPANYID =? AND NAME = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("si",$COMPANYID,$NAME);
   $result=$stmt->execute();

   if($result){
      ?> <script> alert("Record Successfully deleted from the Database."); 
             
   </script>
   <?php
        header("location:viewcompany.php");
   ?>
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
   <link rel="stylesheet" href="assets/deletecompany.css">

</head>
<body>

<form method="post" action="deletecompany.php">
      <fieldset>
         <legend id="DEL" style="color:yellow;">DELETE COMPANY</legend>
         <br>
         <label for="COMPANYID" style="color: white;"> COMPANY_ID </label> 
            <input style="color: white;" type="text" name="companyid" placeholder="Enter COMPANY ID" required >

         <br>
         <label for="NAME"  style="color: white;">COMPANY NAME </label>  
         <input style="color: white;" type="text" name="name" placeholder="Enter COMPANY NAME" required >
         
         
         <button type="submit" name="submit"><b> SUBMIT </b> </button>
         <br>
         <a style="color:rgb(0,255,0);position:absolute;right: 45.5%;" href="trail2view.php" target="_bank"; >click to home page</a><br><br>
         <a style="color:rgb(0,255,0);position:absolute;right: 44.5%;" href="viewcompany.php" target="_bank"; >click to view company</a><br><br>
         
       
         </fieldset>
   </form>
</body>
</html>