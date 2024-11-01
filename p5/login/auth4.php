<?php
session_start(); // Memulai sesi

if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['password'];
    
    
    $user_data = $_SESSION['data_user'];
    
    if ($user_data && $username === $user_data['username'] && $password === $user_data['password']) {
        
        header("Location: thanks.php"); 
        exit;
    } else {
        echo "Login gagal. Silakan coba lagi.";
    }
}
?>
