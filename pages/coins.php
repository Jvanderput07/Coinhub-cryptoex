<?php
require('conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Coins</title>
</head>
<body>
<div class="nav">
        <div class="navsidelinks"><img src="../assets/CoinHub.png" class="logoimg"></div>
        <div class="navsidemidden">
            <a href="../index.php" class="menuitem">Home</a>
            <a href="about.php" class="menuitem">About</a>
            <a href="coins.php" class="menuitem">Coins</a>
        </div>
        <div class="navsiderechts">  
        <a href="login.php" class="loginbutton">Login</a>   
        </div>
    </div>
    <?php 
    $stmt = $connection->query("SELECT * FROM coins");
  
        while ($row = $stmt->fetch()) {
         echo "<div class='test' style='background-color: #2C2D31; margin-top: 20px; color: #ffff; padding: 10px; margin-bottom: 10px; justify-content: space-around; border-radius: 30px;>";
            echo "<span class='item'>" . $row['name'] . "</span>";
            echo "<img src='../assets/" . $row['image'] . "' class='item'>"; 
            echo "<span class='item'>" . $row['img_prijs'] . "</span>";
            echo "</div>";
    }
    ?>
</body>
</html>