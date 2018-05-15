<?php
session_start();
include 'connect.php' ;
$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION['log']= '1' ;
$sql_userdatabase = "select * from userdatabase where email = '$email' and password='$password' ";
$result_userdatabase = mysqli_query($connect, $sql_userdatabase);
if(mysqli_num_rows($result_userdatabase) <= 0)
{
	echo "<center><h1>Incorrect Email or Password</h1></center>";
	echo "<center><table><tr><td><A href='index.php'><button>Try Again</button></a></td></tr></table></center>";
}
else
{
	$_SESSION['logged_in'] = 1;
	      header("location:home.html");
	$row_userdatabase = mysqli_fetch_array($result_userdatabase);
	$_SESSION['email']=$email;
	$_SESSION['name']=$row_userdatabase['Name'];
	$_SESSION['userid']=$row_userdatabase['UserID'];
  
}
 ?>
