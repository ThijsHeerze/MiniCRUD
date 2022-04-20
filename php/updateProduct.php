<?php
    include_once('../includes/connect.php');

    if(isset($_GET ['id'])) {
        $sql = 'UPDATE producten SET naam = :naam, prijs = :prijs, afbeelding = :afbeelding WHERE id = :id';
        
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":naam", $_POST['naam']);
        $stmt->bindParam(":prijs", $_POST['prijs']);
        $stmt->bindParam(":afbeelding", $_POST['afbeelding']);
        $stmt->bindParam(":id", $_POST['id']);
        $stmt->execute();
        
        header('Location: ../admin.php');
    } else {
        header('Location: ../login.php');
    }
?>