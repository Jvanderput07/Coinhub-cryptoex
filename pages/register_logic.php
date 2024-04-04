<?php
session_start();
include 'conn.php';

if (empty($_POST["username"]) || empty($_POST["password"])){
    header("Location: login.php");
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST['email'];

$stmt = $connection->prepare("INSERT INTO users (users, password, email) VALUES(:user, :pass, :email)");
$stmt->bindParam(":user", $username);
$stmt->bindParam(":pass", $password);
$stmt->bindParam(":email", $email);
$stmt->execute();

header("location: login.php")
    
?>