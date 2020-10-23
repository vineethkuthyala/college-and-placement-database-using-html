<?php
include 'app/connect.php';
session_start();
if(isset($_POST['submit'])){
   $USN = $_POST['USN'];
   $Password = $_POST['Password'];

   $sql = "SELECT USN ,NAME, PASSWORD FROM student WHERE USN=?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("s",$USN);
   $stmt->execute();

   $stmt->bind_result($db_usn,$db_name,$db_pass);
   if($stmt->fetch()){
      //echo $db_usn;
      //echo $db_pass;   
      $_SESSION['NAME'] = $db_name;
      // echo $_SESSION['NAME'];     
      $pass_decode = password_verify($Password, $db_pass);
    
      if($pass_decode){
         echo "Login successful";
         header("location:studentpage.php");
      }else{ ?>
        <script> alert("Incorrect Password");</script>
  <?php    }
   }else{ ?>
      <script>alert("Incorrect USN");</script>
  <?php  }
}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
   <link rel="stylesheet" href="assets/login.css">

</head>
<body>

<form method="post" action="login.php">
      <fieldset>
         <legend id="reg" style="color:yellow;">LOGIN</legend>
         <br>
         <label for="USN" style="color: white;"> USN </label> 
            <input type="text" name="USN" placeholder="Enter UserID" required >

         <br>
         <label for="Password"  style="color: white;"> PASSWORD </label>  
         <input type="password" name="Password" placeholder="Enter Password" >
         
         
         <button type="submit" name="submit"><b> SUBMIT </b> </button>
         <br>
         <a style="color: white;text-decoration: underline yellow;" href="registration.php" target="_bank"; > Don't Have an Account then click on this?</a><br><br>
         <a href=" admin.php" target="_blank"; style="text-decoration:underline yellow;position: absolute;right:43%;top: 56%; color: white;">if your admin then click on this? </a>
       
         </fieldset>
   </form>
</body>
</html>