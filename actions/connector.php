<?php
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

    $name = $_POST[''];
    $surname = $_POST[''];
    $gender = $_POST[''];

    $sql = "INSERT INTO users (name, surname, sex) VALUES (?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt
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
    
</body>
</html>