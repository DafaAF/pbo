<?php
include "header.php";
session_start();
?>
<title>Beranda</title>
<html>
    <body>
        <table border="1" height="40%" width="50%" align="center">
           <td><h3 align="center"> Selamat Datang <?php echo $_SESSION['nama']; ?> Di Aplikasi Peduli diri</h4></td>
        </table>
    </body>
</html>