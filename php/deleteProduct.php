<?php
    include_once('../includes/connect.php');

    if(isset($_GET ['id'])) {
        $sql = 'DELETE FROM producten WHERE id = :id';
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        
        header('Location: ../admin.php');
    } else {
        header('Location: ../login.php');
    }
?>