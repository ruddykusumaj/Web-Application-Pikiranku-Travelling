<?php
$penginapan_id = $_GET['id'];

// Tahap 1.
$a = "mysql:host=localhost;dbname=projek_web";
$b = "root";
$c = "";
$kunci = new PDO($a, $b, $c);

// Tahap 2.
$sql = "DELETE FROM penginapan_list
        WHERE penginapan_id=?";

// Tahap 3.
$hasil = $kunci->prepare($sql);
$hasil->execute([$penginapan_id]);

// redirect back
header('Location: penginapan_list.php');