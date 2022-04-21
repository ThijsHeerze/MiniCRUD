<?php
    if(isset($_POST['uname'])) {
        include_once('../includes/connect.php');
        
        $query = 'SELECT * FROM inloggen WHERE gebruiker = :gebruiker AND wachtwoord = :wachtwoord';
        $stmt = $connect->prepare($query);
        $stmt->bindParam(':gebruiker', $_POST['uname']);
        $stmt->bindParam(':wachtwoord', $_POST['psw']);
        $stmt->execute();
        $result = $stmt->fetch();

        if ($stmt->rowcount() > 0) {
            session_start();
            $_SESSION['admin'] = true;

            header('Location: ../admin.php');
            exit();
        } else {
            header('Location: ../login.php?error=Gebruikersnaam of wachtwoord is fout!');
        }
    }
?>