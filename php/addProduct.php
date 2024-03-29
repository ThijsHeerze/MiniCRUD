<?php
    if(isset($_POST['toevoegen'])) {
        include_once('../includes/connect.php');
        
        $sql = 'INSERT INTO producten (naam, prijs, afbeelding) VALUES (:naam, :prijs, :afbeelding)';
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':naam', $_POST['naam']);
        $stmt->bindParam(':prijs', $_POST['prijs']);
        $stmt->bindParam(':afbeelding', $_POST['afbeelding']);
        $stmt->execute();

        header('Location: ../admin.php');
        exit();
    } else {
        header('Location: ../login.php');
        exit();
    }
?>