<?php
include "koneksi.php";
if(isset($_POST['simpan'])){
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $lokasi = $_POST['lokasi'];
    $suhu = $_POST['suhu'];

    $koneksi = new PDO('mysql:host=localhost;dbname=pedulidirii','root','');
    $query = $koneksi->query("INSERT INTO tbperjalanan VALUES ('$tanggal','$jam','$lokasi','$suhu')");
    $data = $query->fetch();
    
    header("location:beranda.php");
}
?>