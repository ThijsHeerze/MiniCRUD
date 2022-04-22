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
        <p class="welkom-admin">Welkom admin, <a class="log-uit" href="php/uitloggen.php"> log uit</a></p>
            <div class="reserveren">
                <table class="reserveren-table">
                    <tr>
                        <th>Naam</th>
                        <th>Datum</th>
                        <th>Aantal personen</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php 
                        require_once('includes/connect.php');

                        $sql = "SELECT * FROM reserveren";
                        $stmt = $connect->prepare($sql);
                        $stmt->execute();
                        $result_reserveren = $stmt->fetchAll(); 
                    
                        foreach ($result_reserveren as $reserveren) {
                            echo "<tr>";
                                echo "<td>".$reserveren["naam"]."</td>";
                                echo "<td>".$reserveren["datum"]."</td>";
                                echo "<td>".$reserveren["aantal"]."</td>";
                                echo "<td><a href='updateReservation.php?id=".$reserveren['id']."'><button class='update-button'>Update</button></a></td>";
                                echo "<td><a href='php/deleteReservation.php?id=".$reserveren['id']."'><button class='delete-button'>Delete</button></a></td>";
                            echo "</tr>";
                        } 
                    ?>
                </table>
            </div>
            <div class="admin-container">
                <form class="pizza-toevoegen-form" action="php/addProduct.php" method="post" >
                    <label class="pizza-toevoegen" for="text" id="aname">Naam product</label>
                    <input type="text" id="aname" name="naam" placeholder="Productnaam...">
                    <label class="pizza-toevoegen" for="text" id="aprice">Prijs</label>
                    <input type="text" id="aprice" name="prijs" placeholder="Prijs...">
                    <label class="pizza-toevoegen" for="img" id="aimg">Afbeelding</label>
                    <input type="text" id="aimg" name="afbeelding" placeholder="Afbeelding...">
                    <input class="toevoegen" type="submit" value="Toevoegen" name="toevoegen">
                </form>
                <table class="pizza-table">
                    <tr>
                        <th>Naam</th>
                        <th>Prijs</th>
                        <th>Afbeelding</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php 
                        require_once('includes/connect.php');
    
                        $sql = "SELECT * FROM producten";
                        $stmt = $connect->prepare($sql);
                        $stmt->execute();
                        $result_producten = $stmt->fetchAll(); 
                    
                        foreach ($result_producten as $product) {
                            echo "<tr>";
                                echo "<td class='tdnaam'>".$product["naam"]."</td>";
                                echo "<td>".$product["prijs"]."</td>";
                                echo "<td><img src='image/".$product["afbeelding"]."'alt='".$product["naam"]."'></td>";
                                echo "<td><a href='updateProduct.php?id=".$product['id']."'><button class='update-button'>Update</button></a></td>";
                                echo "<td><a href='php/deleteProduct.php?id=".$product['id']."'><button class='delete-button'>Delete</button></a></td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </div>        
    </body>
</html>