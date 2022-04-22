<?php
    include_once('includes/connect.php');

    if(isset($_GET ['id'])) {
        $sql = 'SELECT * FROM reserveren WHERE id = :id';
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $reservering = $stmt->fetch();

    } else {
        header('Location: admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\admin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <div class="update-body">
            <div class="update-container">
                <form class="update-reservering" action="php/updateReservation.php" method="post" >
                    <label class="update-id" for="id" id="update">ID</label>
                    <input type="number" id="aname" name="id" value="<?php echo $reservering['id']; ?>" readonly>
                    <label class="update-naam" for="text" id="update">Naam</label>
                    <input type="text" id="aname" name="naam" placeholder="Naam..." value="<?php echo $reservering['naam']; ?>">
                    <label class="update-datum" for="date" id="update">Nieuwe datum</label>
                    <input type="text" id="aname" name="datum" placeholder="Datum..." value="<?php echo $reservering['datum']; ?>">
                    <label class="update-reserveren" for="text" id="update">Aantal personen</label>
                    <input type="text" id="aname" name="aantal" placeholder="Aantal personen..." value="<?php echo $reservering['aantal']; ?>">
                    <input class="updatebutton" type="submit" value="update" name="update">
                </form>
            </div>
        </div>
    </body>
</html>