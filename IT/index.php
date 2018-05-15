<?php
session_start();
include 'connect.php';
?>
<html>
<head>
 <link rel='stylesheet' href='index.css'>
<title>TrainJunction</title>
</head>
<u><h1><p style="color: #000080;">TrainJunction</p></h1></u>

<body>
<center>
<form method='post' action ='authenticate.php'>
<table align="center">
<tr><td>Email : </td> <td><input type="email" name="email" maxlength='50' required></td></tr>
<tr><td>Password : </td> <td><input type="password" name="password" maxlength='50' required></td></td></tr>
<tr><td colspan='2'><center><button type='Submit' name='login_submit' >Login</button></center></td></tr>
<tr><td><a href='register.php'>Register</a></td> <td><a href='aboutus.html'>About Us</a></td></tr>
<tr></tr>

</table>
</form>
</center> 
</body>
</html>

