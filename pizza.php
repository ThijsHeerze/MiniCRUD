<?php 
    include_once('includes/header.php');
?>
    <div class="maakjekeuze"><b>Kies hieronder jouw pizza!</b></div>
    <div class="pizzabody">
    <?php
        // forEach($result_producten as $product) {
        //   echo $product['naam'];
        //   echo $product['prijs'];
        //   echo $product['afbeelding'];
        // }
      ?>
    <!-- <div class="pizzacontainer">
        <img src="image/pizza.jpg" alt="" />
        <form action="winkelwagen.php">
          <b><input class="bestelknop" type="submit" value="Bestel" /></b>
        </form>
      </div> -->
      <!-- <div class="pizzacontainer">
        <img src="image/salamiui.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="image/pizzaei.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="image/mozzarella.jpg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
    </div>
    <div class="pizzabody">
    <div class="pizzacontainer">
        <img src="image/pizzafetta.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="image/pizzaolijven.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="image/pizzapeper.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="image/pizzatomaat.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
    </div>
    <div class="pizzabody">
    <div class="pizzacontainer">
        <img src="image/pizzawortel.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="image/salami.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="image/salami2.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="image/salamichampion.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div> -->
<?php

require_once('includes/connect.php');
  
$sql = "SELECT * FROM producten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result_producten = $stmt->fetchAll();
  
    if (!empty($result_producten)) {
      foreach ($result_producten as $product) {
        echo "<div class='php-pizza-container'>";
          echo "<form action= method=post>";
            echo "<div class=''> {$product["naam"]} </div>";
            echo "<div class=''> {$product["prijs"]} </div>";
            echo "<div class=''>";
              echo "<img class='' src='image/".$product["afbeelding"]."' alt='".$product["naam"]."' >";
            echo "</div>";
            echo "<div class=''><input type=submit value=ADD class=></div>";
          echo "</form>";
        echo "</div>";
        }
    } else {
        $error = "No results!";
    }
    ?>
    </div>
    <script src="JS/main.js"></script>
  </body>
</html>

<?php 
    include_once('includes/footer.php');
?>