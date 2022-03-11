<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
        <div class="header"></div>
        <nav>
            <div class="logo">
                <img src="Image/nyplogo.png" alt="logo">
            </div>
            <input class="searchbar" type="text" placeholder="Search..">
            <ul>
                <div class="ulborder">
                <li><a id="login.php" href="Home">Acties</a></li>
                <li><a href="Menu">Pizza's</a></li>
                <li><a href="Menu">Dranken</a></li>
                <li><a href="Menu">Winkelwagen</a></li>
                <li><a href="Menu">Inloggen</a></li></div>
            </ul>
        </nav>
    </header>
<body>
<form action="form.php" method="post">
    <input type="text" name="username" placeholder="username...">
    <input type="password" name="password" placeholder="password...">
    <input type="submit" name="submit" value="Verstuur">
</form>
<?php
    if (isset($_POST['submit'])) {
        echo $_POST['username'];
        echo $_POST['password'];
    }
?>
</body>
</html>