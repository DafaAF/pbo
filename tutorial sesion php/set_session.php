<?php 
session_start();
$_SESSION['username'] = "staff";
$_SESSION['password'] = "rahasia";
echo "Username = ".$_SESSION['username'];
echo "<br/>";
echo "Password = ".$_SESSION['password'];
?>