<?php
    if(isset($_POST['inloggen'])) {

        // QUERY OM TE CONTROLEREN OF DE ADMIN GEGEVENS KLOPPEN
        session_start();
        $_SESSION['admin'] = true;

        header('Location: ../admin.php');
        exit();
    } else {
        header('Location: ../index.php');
        exit();
    }
?>