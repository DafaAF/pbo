<?php
include "koneksi.php";
    $nik = $_REQUEST['nik'];
    $nama = $_REQUEST['nama'];

    $koneksi = new PDO('mysql:host=localhost;dbname=pedulidirii','root','');
    $query = $koneksi->query("INSERT INTO `login` VALUES ('$nik','$nama')");
    $data = $query->fetch();
    

    header("Location:login.php");
?>