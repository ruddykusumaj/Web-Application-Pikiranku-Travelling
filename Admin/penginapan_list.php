
<!DOCTYPE html>
<html>
    <head>
    <style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 760px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:darkgray;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 760px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">

    <h1 style="text-align: center;">Tambah Penginapan</h1>

  <form id="feedbackForm" data-toggle="validator" action="penginapan_proses.php" enctype="multipart/form-data" method="POST" style="width: 100%; resize:none; padding-right: 30px; padding-left:20px;" data-focus="false">
    <div class="form-group" style="padding-right: 50px;">
    <label class="label-control" for="cmessage" style="margin-left: 3px;">Nama Penginapan</label>
        <textarea style="width: 100%; resize:none; margin-top:5px;" class="form-control-textarea" name="penginapan" id="cmessage" required></textarea>
        
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group" style="padding-right: 50px;">
    <label class="label-control" for="cmessage" style="margin-left: 3px;">Lokasi</label>
        <textarea style="width: 100%; resize:none; margin-top:5px;" class="form-control-textarea" name="lokasi" id="cmessage" required></textarea>
        
        <div class="help-block with-errors"></div>
    </div>
    <div style="margin-left: 3px; margin-bottom:10px;">
    Foto
    <input type="file" name="foto" /><br />
    </div>
    <div class="form-group" style="padding-right: 50px;">
    <label class="label-control" for="cmessage" style="margin-left: 3px;">map</label>
        <textarea style="width: 100%; resize:none; margin-top:5px;" class="form-control-textarea" name="gmap" id="cmessage" required></textarea>
        
        <div class="help-block with-errors"></div>
    
    <label class="label-control" for="cmessage" style="margin-left: 3px;">Rangkuman</label>
        <textarea style="width: 100%; height:100px; resize:none; margin-top:5px;" class="form-control-textarea" name="rangkuman" id="cmessage" required></textarea>
        
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group" style="padding-right: 50px;">
    <label class="label-control" for="cmessage" style="margin-left: 3px;">Paragraf 1</label>
        <textarea style="width: 100%; height:100px; resize:none; margin-top:5px;" class="form-control-textarea" name="p1" id="cmessage" required></textarea>
        
        <div class="help-block with-errors"></div>
    </div>
    <div class="form-group" style="padding-right: 50px;">
    <label class="label-control" for="cmessage" style="margin-left: 3px;">Paragraf 2</label>
        <textarea style="width: 100%; height:100px; resize:none; margin-top:5px;" class="form-control-textarea" name="p2" id="cmessage" ></textarea>
        
        <div class="help-block with-errors"></div>
    </div>
    
    <div class="form-group">
        <button type="submit" class="form-control-submit-button" style="margin-top: 5px;">TAMBAH</button>
    </div>
    <div class="form-message">
        <div id="cmsgSubmit" class="h3 text-center hidden"></div>
    </div>
</form>
</div>

<div class="main">  
<?php

//Tahap 1.
$a = "mysql:host=localhost;dbname=projek_web";
$b = "root";
$c = "";
$kunci = new PDO($a, $b, $c);

//Tahap 2. 
$sql = "SELECT * FROM penginapan_list";

//Tahap 3.
$hasil = $kunci->prepare($sql);
$hasil->execute();

?>
<div style="outline: black 2px dotted; padding-left:7px">
<a href="wisata_list.php" style="font-size: 18px;  font-weight: bold;">Daftar Wisata</a><tb>
<a href="penginapan_list.php" style="font-size: 18px; font-weight: bold;">Daftar Penginapan</a><tb>
<a href="kuliner_list.php" style="font-size: 18px; font-weight: bold;">Daftar Kuliner</a><tb>
</div>

<h2>Daftar Penginapan</h2>
<table border="1">
    <tr>
    <th>No.</th>
    <th>Penginapan id.</th>
    <th>Nama Penginapan</th>
    <th>Lokasi</th>
    <th>EDIT</th>
    <th>DELETE</th>
    </tr>
    <?php
$i = 1;
while($row = $hasil->fetch()):
?>
<tr>
    <td><?= $i; ?></td>
    <td><?php echo $row['penginapan_id']; ?></td>
    <td><?php echo $row['Nama_penginapan']; ?></td>
    <td><?php echo $row['lokasi']; ?></td>
    <td>
    <a href="penginapan_edit.php?id=<?= $row['penginapan_id'] ?>">Edit</a>
    </td>
    <td>
    <a href="delete_penginapan.php?id=<?= $row['penginapan_id'] ?>">Delete</a>

    </td>

</tr>
<?php
$i++;
endwhile;
?>
</table>

</div>
   
</body>
</html> 