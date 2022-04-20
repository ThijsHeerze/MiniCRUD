<?php
    include_once('includes/connect.php');

    if(isset($_GET ['id'])) {
        $sql = 'SELECT * FROM producten WHERE id = :id';
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $product = $stmt->fetch();

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
                <form class="update-product" action="updateProduct.php" method="post" >
                    <label class="update-id" for="id" id="update">ID</label>
                    <input type="number" id="aname" name="id" value="<?php echo $product['id']; ?>" readonly>
                    <label class="update-naam" for="text" id="update">Naam product</label>
                    <input type="text" id="aname" name="naam" placeholder="Naam..." value="<?php echo $product['naam']; ?>">
                    <label class="update-datum" for="date" id="update">Prijs</label>
                    <input type="text" id="aname" name="prijs" placeholder="prijs..." value="<?php echo $product['prijs']; ?>">
                    <label class="update-product" for="img" id="afbeelding">Afbeelding</label>
                    <input type="text" id="aname" name="afbeelding" placeholder="Afbeelding..." value="<?php echo $product['afbeelding']; ?>">
                    <input class="updatebutton" type="submit" value="update" name="update">
                </form>
            </div>
        </div>
    </body>
</html>