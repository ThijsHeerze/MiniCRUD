<?php
    if(isset($_POST['inloggen'])) {
    //stap 1 database tabelnaam aanmaken met gebruikersnaam en ww
    //stap 2 het ophalen van data
    $query = 'SELECT * FROM admin WHERE id';
    //stap 3 sessie aanmaken
    session_start();
        $_SESSION['admin'] = true;
    //stap 4 doorsturen naar adminpagina als ingevulde gegevens correct zijn
    if(){
    header('Location: ../admin.php');
        exit();
    } else {
        header('Location: ../index.php');
        exit();
    }
?>