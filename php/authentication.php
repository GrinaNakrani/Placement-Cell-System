<?php
include "./connection.php";
$username=$_POST['username'];
$password=$_POST['password'];

$sql = "SELECT * FROM user where email='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
   header("location : ../../pages/admin/homepage.php");
}
else
{
   header("location : ../login.php");
}
?>