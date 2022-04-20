<?php
    include_once('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['submit-search'])) {
            $search = mysqli_real_escape_string($connect, $_GET['search']);
            $sql = "SELECT * FROM producten WHERE naam LIKE '%$search%' OR prijs 
            LIKE '%$search%'";
            $result_producten = $stmt->fetchAll();
            // $result = mysqli_query($connect, $sql);
            // $queryResult = mysqli_num_rows($result);

            echo "Er zijn".$queryResult." resultaten!";

            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='pizza-container'>";
                    echo "<form action= method=post>";
                        echo "<div class='pizza-naam'>".$product["naam"]."</div>";
                        echo "<div class='pizza-prijs'>".$product["prijs"]."</div>";
                        echo "<div class=''>";
                        echo "<img class='' src='image/".$product["afbeelding"]."' alt='".$product["naam"]."' >";
                        echo "</div>";
                    echo "<div><input type=submit value=Add class='pizza-add-button'></div>";
                    echo "</form>";
                    echo "</div>";  
                }
            } else {
                echo "Geen resultaten";
            }
        }
    ?>
</body>
</html>