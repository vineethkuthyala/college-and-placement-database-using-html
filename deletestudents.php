<?php
include 'app/connect.php';
if(isset($_POST['submit'])){
$GraduationYear = $_POST['Year'];
 
   $sql = "DELETE FROM student WHERE GRADUATION_YEAR = ? ";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("i",$GraduationYear);
   $result=$stmt->execute();

   if($result){ 
      ?> <script> alert("Record Successfully deleted from the Database."); 
</script>
<?php
header("location:viewstudent.php");
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
   <link rel="stylesheet" href="assets/deletestudents.css">

</head>
<body>

<form method="post" action="deletestudents.php">
      <fieldset>
         <legend id="delstud" style="color:yellow;">DELETE STUDENT</legend>
         <br>
        <label for="GraduationYear"> GRADUATION YEAR </label>

            <input type="number" name="Year" min="2021" max="2099" step="1" value="2021" /><br>
       <button type="submit" name="submit"><b> SUBMIT </b> </button>
         <br>
         <a style="color:rgb(0,255,0); position:absolute;right: 45.5%;" href="trail2view.php" target="_bank"; >click to home page</a><br><br>
         
         
       
         </fieldset>
   </form>
</body>
</html>