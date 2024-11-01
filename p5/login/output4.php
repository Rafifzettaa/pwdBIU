<?php
session_start();
if(isset($_POST['regis'])){
    $username = $_POST['user'];
    $password = $_POST['password'];
    

    $_SESSION['data_user'] = array (
        'username' => $username,
        'password' => $password
    );
        echo 'Selamat Anda Berhasil Mendaftar';
        
    }
    header("Location: login4.php"); 
?>
