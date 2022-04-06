<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="unimedia_senin";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die ("Connection Failed: ".mysqli_connect_error());
}
?>