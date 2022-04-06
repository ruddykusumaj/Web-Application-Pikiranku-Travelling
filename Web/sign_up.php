<?php
// data dari form

$username = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


//1.
$k = new PDO("mysql:host=localhost;dbname=projek_web", "root", "");


//2.
$sql = "INSERT INTO users (email, password)
        VALUES (?, ?)";

//3.
$result = $k->prepare($sql);
$result->execute([$username, $password]);


//redirect
header('Location: main.html');