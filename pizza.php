<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="Css\style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&family=Fruktur&family=Irish+Grover&family=Poppins:wght@100;200&family=Roboto:wght@300&family=Ubuntu:wght@300&family=Zen+Antique&family=Zen+Kurenaido&display=swap" rel="stylesheet" />
    <title>Document</title>
  </head>
  <body class="indexbody">
  <header>
        <div class="header"></div>
        <nav>
            <div class="logo">
                <img src="Image/nyplogo.png" alt="logo">
            </div>
            <ul class="ul"> 
            <li><a href="index.php">Home</a></li>
                <li><a href="pizza.php">Pizza's</a></li>
                <li><a href="reserveren.php">Reserveren</a></li>          
                <li><a href="winkelwagen.php"><img class="shoppingcart" src="Image/shopping-cart.png" alt=""></a></li>
                <li><a class="navbutton" href="login.php">Inloggen</a></li></div>
            </ul>
            </ul>
        </nav>
    </header>
<?php

require_once('includes/connect.php');
  
$sql = "SELECT * FROM producten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result_producten = $stmt->fetchAll();

global $conn;

$query = "SELECT * FROM producten";

$error = '';



function showAllProducts() {
    global $conn, $error, $query;
    $result = $conn->prepare($query);
    $result->execute();
    if (!empty($query)) {
        foreach ($result as $value) {
            echo "<div class='product_container'>";
                echo "<form action= method=post>";
                    echo "<div class=''> {$value["naam"]} </div>";
                    echo "<div class=''> {$value["prijs"]} </div>";
                    echo "<div class=''>";
                        echo "<img class='' src={$value["Image"]} alt={$value["afbeelding"]} >";
                    echo "</div>";
                    echo "<div class=''><input type=submit value=ADD class=></div>";
                echo "</form>";
            echo "</div>";
        }
    } else {
        $error = "No results!";
    }
}
    ?>
    <div class="maakjekeuze"><b>Kies hieronder jou pizza!</b></div>
    <div class="pizzabody">
      <?php
        // forEach($result_producten as $product) {
        //   echo $product['naam'];
        //   echo $product['prijs'];
        //   echo $product['afbeelding'];
        // }
      ?>
    <!-- <div class="pizzacontainer">
        <img src="Image/pizza.jpg" alt="" />
        <form action="winkelwagen.php">
          <b><input class="bestelknop" type="submit" value="Bestel" /></b>
        </form>
      </div> -->
      <!-- <div class="pizzacontainer">
        <img src="Image/salamiui.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/pizzaei.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/mozzarella.jpg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
    </div>
    <div class="pizzabody">
    <div class="pizzacontainer">
        <img src="Image/pizzafetta.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/pizzaolijven.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/pizzapeper.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/pizzatomaat.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
    </div>
    <div class="pizzabody">
    <div class="pizzacontainer">
        <img src="Image/pizzawortel.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/salami.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/salami2.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/salamichampion.jpeg" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div> -->
    </div>
    <footer>
      <div class="footercontainer">
        <div class="footerborder">
          <div class="footerfixed1">
            <ul>
              <li><b>New York Pizza</b></li>
              <li>NYP Franchise</li>
              <li>Over New York Pizza</li>
              <li>Klantenservice</li>
              <li>Werken bij New York Pizza</li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="footerfixed2">
            <ul>
              <li><b>Producten</b></li>
              <li>Allergenen</li>
              <li>Menu</li>
              <li>Pizza aanbiedingen</li>
              <li>Online eten bestellen</li>
              <li>Productinformatie</li>
              <li></li>
            </ul>
          </div>
          <div class="footerfixed3">
            <ul>
              <li><b>Overig</b></li>
              <li>Algemene voorwaarden</li>
              <li>Cookiestatement</li>
              <li>Coupon voorwaarden</li>
              <li>Privacy Statement</li>
              <li>Nieuws en publicaties</li>
              <li>Blog</li>
            </ul>
          </div>
          <div class="social">
            <li><b>Volg ons op</b></li>
            <div class="footerimg">
              <img src="Image/facebook.svg" alt="facebook" />
              <img src="Image/twitter.svg" alt="twitter" />
              <img src="Image/instagram.svg" alt="instagram" />
              <img src="Image/youtube.svg" alt="youtube" />
            </div>
          </div>
          <div class="footerbutton">
            <button class="loginbutton">Login</button>
            <button class="reserveerbuttonfooter">Reserveer</button>
          </div>
        </div>
      </div>
    </footer>
    <script src="JS/main.js"></script>
  </body>
</html>