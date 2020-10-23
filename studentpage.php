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
	<link rel="stylesheet" href="assets/newstud.css">

</head>
<body>

<div class="nav">
	<ul>
	<li ><a href="studentpage.php" >HOME </a></li>
	<li><a href="https://www.google.com/search?q=kvg+college+of+engineering+news&rlz=1C1CHBD_enIN921IN921&sxsrf=ALeKk00W9u-FFrIbID9Wb6OzKW0R6ick9A:1603025244214&source=lnms&tbm=nws&sa=X&ved=2ahUKEwjH6vyxlr7sAhUs7XMBHenKBPIQ_AUoAXoECAQQAw&biw=1366&bih=600"target="_blank" >NEWS</a>
  </li>
 <li><a href="https://www.google.com/search?q=kvg+college+gallery&tbm=isch&ved=2ahUKEwiWsrrwlL7sAhXRi0sFHfTbARwQ2-cCegQIABAA&oq=kvg+college+gallery&gs_lcp=CgNpbWcQAzIECCMQJ1DgHljgHmC-JmgAcAB4AIABhwGIAYcBkgEDMC4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=xjeMX5a3FtGXrtoP9LeH4AE&bih=657&biw=1366&rlz=1C1CHBD_enIN921IN921"target="_blank"  >GALLERY</a></li>
	<li><a href="https://www.google.com/search?rlz=1C1CHBD_enIN921IN921&biw=1366&bih=600&sxsrf=ALeKk02a-ZSYukJVrO6-beAxyluQx58vmw%3A1603025320808&ei=qDmMX_70MPPgz7sPw76cmAc&q=kvg+college+of+engineering+contact&oq=kvg+college+of+engineering+contact&gs_lcp=CgZwc3ktYWIQAzIECAAQRzIECAAQRzIECAAQRzIECAAQRzIECAAQRzIECAAQRzIECAAQRzIECAAQR1AAWABgqw9oAHACeACAAQCIAQCSAQCYAQCqAQdnd3Mtd2l6yAEIwAEB&sclient=psy-ab&ved=0ahUKEwj-6L_Wlr7sAhVz8HMBHUMfB3MQ4dUDCA0&uact=5"target="_blank"  >CONTACT US</a></li>
	<li><a href="logout.php" >LOG OUT </a></li>
	</ul>
</div>
<h2> WELCOME! </h2>
	<h2><?php
         echo $_SESSION['NAME'];
         ?>
</h2>
<div style="style=" margin: 200px; text-align: center;>
<h2 style=" font-family: cursive;
            background-color:rgba(0,0,0,0.4);
            color:white;
            text-align:center;
            padding: 20px;"> STUDENT PORTAL</h2>

    <a style="padding: 20px;
              margin: 20px;
              border-radius: 3px;
              background-color:palevioletred;
              text-decoration: none;
              position: absolute;
              right: 55%;
              display: inline-block;
              color: white;" href="studentinternshipview.php">VIEW INTERNSHIP</a>
                  <a style="padding: 20px;
              margin: 20px;
              border-radius: 3px;
              background-color:palevioletred;
              text-decoration: none;
              position: absolute;
              right: 30%;
              display: inline-block;
              color: white;" href="viewplacement.php">VIEW PLACEMENT</a>






    
    </div>




</body>
</html>