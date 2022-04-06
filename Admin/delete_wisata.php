<?php
$wisata_id = $_GET['id'];

// Tahap 1.
$a = "mysql:host=localhost;dbname=projek_web";
$b = "root";
$c = "";
$kunci = new PDO($a, $b, $c);

// Tahap 2.
$sql = "DELETE FROM wisata_list
        WHERE wisata_id=?";

// Tahap 3.
$hasil = $kunci->prepare($sql);
$hasil->execute([$wisata_id]);

// redirect back
header('Location: wisata_list.php');