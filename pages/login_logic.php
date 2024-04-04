<?php
session_start();
include 'conn.php';

if (empty($_POST["username"]) || empty($_POST["password"])){
    header("Location: login.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

$stmt = $connection->prepare("SELECT * FROM users WHERE users=:user AND password=:pass");
$stmt->execute(['user' => $username, 'pass' => $password]);
$user = $stmt->fetch();

if (!$user){
    header("Location: login.php");
    echo "Wrong login";
}
else{
    $_SESSION['user'] = $username;
    header("Location: dashboard.php");
}
    
?>