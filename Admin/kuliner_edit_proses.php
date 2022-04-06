<?php
try {
  //data dari form
  $nama = $_POST['tempat'];
  $lokasi = $_POST['lokasi'];
  $foto = $_FILES['foto'];
  $rangkuman = $_POST['rangkuman'];
  $p1 = $_POST['p1'];
  $p2 = $_POST['p2'];
  $map = $_POST['gmap'];

  //dapatkan ekstensi file
  $ext = explode(".", $foto['name']);
  $ext = end($ext);
  $ext = strtolower($ext);

  echo $ext;

  //Buat array yang berisi daftar ekstensi yang diperbolehkan 
  $ext_boleh = ['jpg', 'png', 'jpeg'];

  //cek apakah file yang diupload memiliku ext yang valid
  if (in_array($ext, $ext_boleh)) {

    $sumber = $foto['tmp_name'];
    $tujuan = '../uploads/kuliner/' . $foto['name'];

    move_uploaded_file($sumber, $tujuan);


    $kunci = new PDO("mysql:host=localhost;dbname=projek_web", "root", "");

    $sql = "UPDATE kuliner_list
    SET nama_kuliner = ?,
        lokasi = ?,
        foto_kuliner = ?,
        rangkuman = ?,
        P1 = ?,
        P2 = ?,
        gmap = ?

    WHERE kuliner_id = ?";

    $data = [
      $nama,
      $lokasi,
      $tujuan,
      $rangkuman,
      $p1,
      $p2,
      $map,
      $_POST['id']
    ];

    // Tahap 3.
    $hasil = $kunci->prepare($sql);
    $hasil->execute($data);
    header('Location: kuliner_list.php');
  } else {
    echo " file tidak valid";
  }
} catch (PDOException $e) {
  echo $e->getMessage();
  echo "<br />";
  echo $e->getLine();
  echo "<br />";
  echo $e->getCode();
  var_dump($e);
}


?>