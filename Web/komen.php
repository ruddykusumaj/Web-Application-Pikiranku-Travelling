<?php
session_start();
//data dari form
$username = $_POST['email'];
$password = $_POST['psw'];
echo 'Bisa gak ';

//Koneksi
try {
$k = new PDO ("mysql:host=localhost;dbname=projek_web", "root", "");
echo 'Bisa gak ';
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}


//SQL
$sql = "INSERT INTO komen
        WHERE user_id = ?";

//
echo 'Bisa gak ';

$result = $k->prepare($sql);
$result->execute([$username]);

echo 'Bisa gak ';


//Cek email & pass
if($row = $result->fetch()){
    
echo 'Bisa gak ';

    //username ada
    //cek password apakah sesuai
    if(password_verify($password, $row['password'])){

        //password cocok
        $_SESSION['email'] = $row['email'];
        // $_SESSION['role'] = $row['role'];
        // $_SESSION['user_id'] = $row['id'];
        header('Location: main.html');
    }else{
        //LOGIN gagal
        header('Location: index.html');
        echo 'bisa dong';
}    
}

