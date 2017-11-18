<?php
require 'dbconfig/config.php';
if (isset($_GET['username'])&&isset($_GET['counter']) )

{
	$username = $_GET['username'];
	$counter = $_GET['counter'];
$pass = $_POST['password'+$counter];
$hashed = hash('sha512', $_POST['password'+$counter]);
$ime= $_POST['password'+$counter];
$prezime= $_POST['lnamenew'+$counter];
$mail= $_POST['mail'+$counter];
$sql = "UPDATE korisnik set ime='$ime', prezime='$prezime', password='$hashed', mail='$mail' where username='$username'";
$result = mysqli_query($conn, $sql);
header("Location: admin.php");
}
else
{
session_destroy();
header("Location: pocetna.php");

}



?>