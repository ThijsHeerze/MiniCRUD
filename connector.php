<?php

include('../include/connector.php')

    $servername = "localhost";
    $username = "admin_sd";
    $password = "123";
    $dbname = "project_newyorkpizza";

    $dsn "mysql:host=$servername;dbname=$db;chartset=";

    try {
        $pdo = new PDO($dsn, $username, $password);        
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users (name, surname, sex) VALUES (?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$name, $surname, $sex]);
    ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="inlogform" action="index.php" method="post">
<input class="inloginput" type="text" placeholder="Enter Username" name="uname" required>
<input class="inloginput" type="password" placeholder="Enter Password" name="psw" required>
<input class="inloginput" type="text" checked="checked" name="gender">
</form>
</body>
</html>