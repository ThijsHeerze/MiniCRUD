<?php
    if(isset($_POST['reserveren'])) {
        include_once('../includes/connect.php');
        
        $sql = 'INSERT INTO reserveren (naam, datum, aantal) VALUES (:naam, :datum, :aantal)';
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':naam', $_POST['naam']);
        $stmt->bindParam(':datum', $_POST['datum']);
        $stmt->bindParam(':aantal', $_POST['aantal']);
        $stmt->execute();

        header('Location: ../reserveren.php');
        exit();
    } else {
        header('Location: ../index.php');
        exit();
    }
?>