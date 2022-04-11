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