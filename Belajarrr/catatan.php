<?php
include "header.php";
$db  = new PDO("mysql:host=localhost;dbname=pedulidirii",'root','');
$query = $db->query("SELECT * FROM tbperjalanan");
?>
<title>Catatan perjalanan</title>
 <table border="1" align="center" width="50%" height="40%">
            <td>
                <table align="center" border="1" width="80%" height="20%">
                    <tr>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Tempat Yang Dikunjungi</th>
                    <th>Suhu Tubuh</th>
                    </tr>
                    <?php while($data = $query->fetch()) : ?>
                    <tr>
                        <td><?= $data['tanggal']?></td>
                        <td><?= $data['jam']?></td>
                        <td><?= $data['lokasi']?></td>
                        <td><?= $data['suhu']?></td>
                    </tr>
                    <?php endwhile; ?>