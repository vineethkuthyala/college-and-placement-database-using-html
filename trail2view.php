<?php
session_start();
if(!isset($_SESSION['NAME'])){

	header("location:login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="assets/trail2view.css">
  <style type="text/css">
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  position: relative;
  overflow: hidden;
  background-color:rgb(0,255,0);
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: rgba(0,0,0,0.5);
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.topnav-right {
  float: right;
}

/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }
  
  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}
  </style>

</head>
<body>

<!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="trail2view.php" class="active">Home</a>
  </div>
  
  <!-- Left-aligned links (default) -->
  <a href="https://www.google.com/search?q=kvg+college+of+engineering+news&rlz=1C1CHBD_enIN921IN921&sxsrf=ALeKk00W9u-FFrIbID9Wb6OzKW0R6ick9A:1603025244214&source=lnms&tbm=nws&sa=X&ved=2ahUKEwjH6vyxlr7sAhUs7XMBHenKBPIQ_AUoAXoECAQQAw&biw=1366&bih=600"target="_blank" >NEWS</a>
  <a href="https://www.google.com/search?q=kvg+college+gallery&tbm=isch&ved=2ahUKEwiWsrrwlL7sAhXRi0sFHfTbARwQ2-cCegQIABAA&oq=kvg+college+gallery&gs_lcp=CgNpbWcQAzIECCMQJ1DgHljgHmC-JmgAcAB4AIABhwGIAYcBkgEDMC4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=xjeMX5a3FtGXrtoP9LeH4AE&bih=657&biw=1366&rlz=1C1CHBD_enIN921IN921"target="_blank" >GALLERY</a>
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="https://www.google.com/search?rlz=1C1CHBD_enIN921IN921&biw=1366&bih=600&sxsrf=ALeKk02a-ZSYukJVrO6-beAxyluQx58vmw%3A1603025320808&ei=qDmMX_70MPPgz7sPw76cmAc&q=kvg+college+of+engineering+contact&oq=kvg+college+of+engineering+contact&gs_lcp=CgZwc3ktYWIQAzIECAAQRzIECAAQRzIECAAQRzIECAAQRzIECAAQRzIECAAQRzIECAAQRzIECAAQR1AAWABgqw9oAHACeACAAQCIAQCSAQCYAQCqAQdnd3Mtd2l6yAEIwAEB&sclient=psy-ab&ved=0ahUKEwj-6L_Wlr7sAhVz8HMBHUMfB3MQ4dUDCA0&uact=5"target="_blank" >CONTACT</a>
    <a href="logout.php">LOGOUT</a>
  </div>
  
</div>



<h2> WELCOME! </h2>
	<h2><?php
         echo $_SESSION['NAME'];
         ?>
</h2>
<div style="style=" margin: 200px; text-align: center;"">
<h2 style=" font-family: cursive;
            background-color: chocolate;
            color:black;
            text-align:center;
            padding: 20px;"> DATABASE OPERATIONS</h2>
    <a style="padding: 20px;
              margin: 20px;
              border-radius: 3px;
              background-color:palevioletred;
              text-decoration: none;
              display: inline-block;
              position: absolute;
              right: 82%;
              color: white;" href="company.php" target="_blank";>ADD COMPANY</a>
    <a style="padding: 20px;
             margin: 20px;
             border-radius: 3px;
             background-color:palevioletred;
             text-decoration: none;
             position: absolute;
              right: 69%;
             display: inline-block;
             color: white;" href="viewstudent.php" target="_blank">VIEW STUDENTS</a>
    <a style="padding: 20px;
             margin: 20px;
             border-radius: 3px;
             background-color:palevioletred;
             text-decoration: none;
             position: absolute;
             right:54.5%;
             display: inline-block;
             color: white;" href="deletestudents.php" target="_blank">DELETE STUDENTS</a>         
    <a style="padding: 20px;
              margin: 20px;
              border-radius: 3px;
              background-color:palevioletred;
              text-decoration: none;
              position: absolute;
              right: 40.5%;
              display: inline-block;
              color: white;" href="deletecompany.php">DELETE COMPANY</a>
    <a style="padding: 20px;
              margin: 20px;
              border-radius: 3px;
              background-color:palevioletred;
              text-decoration: none;
              position: absolute;
              right: 28%;
              display: inline-block;
              color: white;" href="viewcompany.php">VIEW COMPANY</a>
    <a style="padding: 20px;
              margin: 20px;
              border-radius: 3px;
              background-color:palevioletred;
              text-decoration: none;
              position: absolute;
              right: 15%;
              display: inline-block;
              color: white;" href="internship.php">ADD INTERNSHIP</a>
   <a style="padding: 20px;
              margin: 20px;
              border-radius: 3px;
              background-color:palevioletred;
              text-decoration: none;
              position: absolute;
              right:2%;
             /* bottom: 38%;*/
              display: inline-block;
              color: white;" href="place.php">ADD PLACEMENT</a>






    
    </div>




</body>
</html>