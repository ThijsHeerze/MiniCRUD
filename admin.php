<?php
    include_once('includes/session.php');
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
    <body class="admin-body">
        <p class="welkom-admin">Welkom admin, <a class="log-uit" href="php/uitloggen.php">log uit</a></p>
            <div class="admin-container">
                <form class="pizza-toevoegen-form" action="php/addProduct.php" method="post" >
                    <label class="pizza-toevoegen" for="text" id="aname">Naam product</label>
                    <input type="text" id="aname" name="naam" placeholder="Productnaam...">
                    <label class="pizza-toevoegen" for="text" id="aprice">Prijs</label>
                    <input type="text" id="aprice" name="prijs" placeholder="Prijs...">
                    <label class="pizza-toevoegen" for="img" id="aimg">Afbeelding</label>
                    <input type="text" id="aimg" name="afbeelding" placeholder="Afbeelding...">
                    <input type="submit" value="Toevoegen" name="toevoegen">
                </form>
                <table class="table">
                    <tr>
                        <th>Naam</th>
                        <th>Prijs</th>
                        <th>Afbeelding</th>
                    </tr>
                    <?php 
                        require_once('includes/connect.php');
    
                        $sql = "SELECT * FROM producten";
                        $stmt = $connect->prepare($sql);
                        $stmt->execute();
                        $result_producten = $stmt->fetchAll(); 
                    
                        foreach ($result_producten as $product) {
                            echo "<tr>";
                            echo "<td>".$product["naam"]."</td>";
                            echo "<td>".$product["prijs"]."</td>";
                            echo "<td><img src='image/".$product["afbeelding"]."'alt='".$product["naam"]."'></td>";
                            echo "<td><button class='update-button'>Update</button></td>";
                            echo "<td><button class='delete-button'>Delete</button></td>";
                            echo "</tr>";
                        } 
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>