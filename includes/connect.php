<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "Restaurant";

    $dsn = "mysql:host=$host;dbname=$dbname;chartset=";
    $opt = [
        PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES =>  false,
    ];

    try {
        $connect = new PDO($dsn, $username  , $pass, $opt);
    }
    catch (PDOException $e) {
        echo $e->getMessage();
        die("Sorry, Database probleem");
    }
?>