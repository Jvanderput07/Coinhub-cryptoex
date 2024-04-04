<?php
session_start();
require('conn.php');
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <h2 class="title">Welcome <?php echo ($_SESSION['user']) ?> </h2>
    <form action="delete_logic.php" name="delete_logic" method="POST">
                <input type="text" name="id_user" placeholder="Id of the user">
                <input type="submit" value="Delete">
            </form>
    <div class="dashboardbackcontainer">
        <div class="items">Id:</div>
        <div class="items">username :</div>
        <div class="items">Email:</div>
        <div class="items">Password:</div>
    </div>
    <?php 
    $stmt = $connection->query("SELECT * FROM users");
  
        while ($row = $stmt->fetch()) {
         echo "<div class='test' style='background-color: #6f5fd9; color: #ffff; padding: 10px; margin-bottom: 10px; justify-content: space-around;>";
            echo "<span class='item'>" . $row['id'] . "</span>";
            echo "<span class='item'>" . $row['users'] . "</span>";
            echo "<span class='item'>" . $row['email'] . "</span>";
            echo "<span class='item'>" . $row['password'] . "</span>";
            echo "</div>";
    }
    ?>
</body>
</html>
