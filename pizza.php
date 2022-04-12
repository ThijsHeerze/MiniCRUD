<?php 
    include_once('includes/header.php');
?>
    <div class="maakjekeuze"><b>Kies hieronder jouw pizza!</b></div>
    <div id="#" class="pizzabody">
<?php

require_once('includes/connect.php');
  
$sql = "SELECT * FROM producten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result_producten = $stmt->fetchAll();

// include("pizza.php");

global $connect;

$query = "";

$error = '';

if (isset($_POST["submit"])) {
    if (!empty($_POST["zoekbalk"])) {
        $query = "SELECT * FROM producten WHERE product_naam = '".$_POST["zoekbalk"]."'";
        return;
    } else {
        $query = "SELECT * FROM producten ORDER BY productenID ASC";
    }
}

if (isset($_POST["submit"])) {
    $query = "SELECT * FROM producten WHERE naam = East Side Shoarma";
}

if (isset($_POST["allessubmit"])) {
    $query = "SELECT * FROM producten ORDER BY productenID ASC";
}
  
    if (!empty($result_producten)) {
      foreach ($result_producten as $product) {
          echo "<div class='pizza-container'>";
            echo "<form action= method=post>";
              echo "<div class='pizza-naam'> {$product["naam"]} </div>";
              echo "<div class='pizza-prijs'> {$product["prijs"]} </div>";
              echo "<div class=''>";
                echo "<img class='' src='image/".$product["afbeelding"]."' alt='".$product["naam"]."' >";
              echo "</div>";
            echo "<div><input type=submit value=Add class='pizza-add-button'></div>";
          echo "</form>";
        echo "</div>";  
        }
    } else {
        $error = "No results!";
    }
    ?>
    </div>
    <script src="JS/main.js"></script>

<?php 
    include_once('includes/footer.php');
?>