<?php
$kuliner_id = $_GET['id'];

// Tahap 1.
$a = "mysql:host=localhost;dbname=projek_web";
$b = "root";
$c = "";
$kunci = new PDO($a, $b, $c);

// Tahap 2.
$sql = "DELETE FROM kuliner_list
        WHERE kuliner_id=?";

// Tahap 3.
$hasil = $kunci->prepare($sql);
$hasil->execute([$kuliner_id]);

// redirect back
header('Location: kuliner_list.php');