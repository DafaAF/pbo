<?php
include "header.php";
?>
<title>Isi Data</title>
<html>
<body>
<link rel="stylesheet" type="text/css" href="styleeee.css">
<div class="kotak_isi"> 
<table border="1" align="center" width="50%" height="40%" >
<form action="prosesisidata.php" method="POST">
    <td>
    <table align="center">
    <tr>
        <td>Tanggal</td>
        <td><input type="date" name="tanggal"></td>
    </tr>
    <tr>
        <td>Jam</td>
        <td><input type="time" name="jam"></td>
    </tr>
    <tr>
        <td>Lokasi Yang Di kunjungi</td>
        <td><input type="text" name="lokasi"></td>
    </tr>
    <tr>
        <td>Suhu Tubuh</td>
        <td><input type="text" name="suhu"></td>
    </tr>
    <tr>
        <td></td>
        <td align="right"><input type="submit" name="simpan" value="simpan"></td>
    </tr>
    </table>
</form>
</td>
</table>
</body>
</html> 