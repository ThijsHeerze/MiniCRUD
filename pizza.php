<?php 
    include_once('includes/header.php');
    include_once('includes/connect.php');
?>
    <div class="maakjekeuze">
        <p class="kiesjepizza">Kies hieronder jouw pizza!</p>
        <p class="zoekbalk">Welke pizza zoekt u?</p>
            <form class="search-form" action="#" method="get">
                <input class="search-input" type="text" name="search" placeholder="Zoek...">
                <button class="search-button" type="submit" name="submit-search">Zoek</button>
            </form>
    </div>
    <div class="pizzabody">
<?php
    if (isset($_GET['search'])) {
        $zoekvraag = '%'.$_GET['search'].'%';

        $sql = "SELECT * FROM producten WHERE naam LIKE :zoekvraag";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':zoekvraag', $zoekvraag);
    } else {
        $sql = "SELECT * FROM producten";
        $stmt = $connect->prepare($sql);
    }

    $stmt->execute();
    $result_producten = $stmt->fetchAll();
  
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