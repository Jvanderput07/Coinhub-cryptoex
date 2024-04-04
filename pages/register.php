<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>login</title>
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
        </div>
    </div>
    <div class="maincontainer">
        <div class="logincontainer">
            <form action="register_logic.php" name="register_logic" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="email" name="email" placeholder="Email" required>
                    <input type="submit" value="login">
            </form>
        </div>
    </div>
</body>
</html>