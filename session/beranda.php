<?php

session_start();
if(!isset($_SESSION["nama"])) { // jika ada session nama
   header("Location:form.php");
}
?>
<h1>Halaman Beranda </h1>
<a href="user.php">Halaman User</a><br />
<a href="hapus.php">Logout</a>