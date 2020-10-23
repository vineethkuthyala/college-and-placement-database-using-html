<?php
include 'app/connect.php';
session_start();
if(isset($_POST['submit'])){
   $PERSONALID = $_POST['PERSONALID'];
   $PASSWORD = $_POST['PASSWORD'];

   $sql = "SELECT PERSONALID ,NAME ,PASSWORD FROM ADMIN WHERE PERSONALID=?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("s",$PERSONALID);


   $stmt->execute();
   
   $stmt->bind_result($db_personalid,$db_name,$db_pass);
   if($stmt->fetch()){

      //echo $db_personalid;
      //echo $db_pass;   
      $_SESSION['NAME'] = $db_name;
      // echo $_SESSION['NAME']; 
      $pass_decode = password_verify($PASSWORD, $db_pass);
      //echo " $db_pass $PASSWORD $pass_decode";

    
      if($pass_decode){ ?>
    <script>alert("admin Login successful");</script> 
      <?php   header("location:trail2view.php");
      }else{ ?>
        <script>alert( "Incorrect Password");
</script>   
<?php   }
   }else{ ?>
    <script>alert("Incorrect personalid");</script>
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

<form method="post" action="admin.php">
      <fieldset>
         <legend id="admin" style="color:yellow;">ADMIN</legend>
         <br>
         <label for="personalid" style="color: white;"> PERSONALID </label> 
            <input type="text" name="PERSONALID" placeholder="Enter personalid" required >


       <!--  <br>
         <label for="name"  style="color: white;">NAME</label>  
         <input type="text" name="NAME" placeholder="Enter your name" > -->

         <br>
         <label for="Password"  style="color: white;"> PASSWORD </label>  
         <input type="password" name="PASSWORD" placeholder="Enter Password" >
         
         
         <button type="submit" name="submit"><b> SUBMIT </b> </button>
         <br>
         <a href="login.php" target="_bank"; style="text-decoration: underline yellow; position: absolute;right:44%;top: 58%;  color:white"; >click to student login page? </a>
         <br>
      </fieldset>
   </form>
</body>
</html>