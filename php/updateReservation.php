<?php
    include_once('../includes/connect.php');

    if(isset($_POST['update'])) {
        $sql = 'UPDATE reserveren SET naam = :naam, datum = :datum, aantal = :aantal WHERE id = :id';
        
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":datum", $_POST['datum']);
        $stmt->bindParam(":aantal", $_POST['aantal']);
        $stmt->bindParam(":id", $_POST['id']);
        $stmt->execute();
        
        header('Location: ../admin.php');
    } else {
        header('Location: ../login.php');
    }
?>