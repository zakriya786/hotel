<?php
session_start();
if(isset ($_SESSION["email"]) && !empty($_SESSION["email"]))
{
session_destroy();
echo '<center><h2>You have been sucessfully logged Out<h2></center><br>';

echo '<center><table><tr><td><A href="index.php"><button>Start Again</button></a></td></tr></table></center>';
}

else
	header("Location:index.php");
?>

