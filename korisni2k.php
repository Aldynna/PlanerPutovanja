
<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Početna stranica</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
<div id="main-wrapper">
<center>
<h2>Početna stranica</h2>
<h3>Dobrodošli

<?php echo $_SESSION['username'] ?>
</h3>
<img src="imgs/logo.jpg" class="avatar"/>
</center>
<form class="myform" action="homepage.php" method="post">
<input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>
</form>
<?php
if(isset($_POST['logout']))
{
session_destroy();
header('location:pocetna.php'); 
}
?>
</div>
</body>
</html>