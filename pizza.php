<?php 
    include_once('includes/header.php');
?>
    <div class="maakjekeuze"><b>Kies hieronder jouw pizza!</b></div>
    <div class="pizzabody">
        <form class="search-form" action="search.php" method="get">
            <input class="search-input" type="text" name="search" placeholder="Zoek">
            <button class="search-button" type="submit" name="submit-search">Zoek...</button>
        </form>
    <?php
        // include_once('../incudes/connect.php');

        $sql = "SELECT * FROM producten";
        $connect->prepare($sql);
        $stmt->execute();
        $result_producten = $stmt->fetchAll();
        // $result = mysqli_query($connect, $sql);
        // $queryResults = mysqli_num_rows($result);

        if ($queryResults > 0) {
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
        }
    ?>
<?php

require_once('includes/connect.php');
  
$sql = "SELECT * FROM producten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result_producten = $stmt->fetchAll();

include_once("pizza.php");

global $connect;

$sql = "";

$error = '';

if (isset($_POST["submit"])) {
    if (!empty($_POST["zoekbalk"])) {
        $sql = "SELECT * FROM producten WHERE product_naam = '".$_POST["zoekbalk"]."'";
        return;
    } else {
        $sql = "SELECT * FROM producten ORDER BY productenID ASC";
    }
}

if (isset($_POST["submit"])) {
    $sql = "SELECT * FROM producten WHERE naam = East Side Shoarma";
}

if (isset($_POST["allessubmit"])) {
    $sql = "SELECT * FROM producten ORDER BY productenID ASC";
}
  
    if (!empty($result_producten)) {
      foreach ($result_producten as $product) {
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
        echo "<div>Er zijn geen producten gevonden</div>";
        $error = "No results!";
    }
    ?>
    </div>
    <script src="JS/main.js"></script>

<?php 
    include_once('includes/footer.php');
?>