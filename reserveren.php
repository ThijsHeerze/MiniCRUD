<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="Css\style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&family=Fruktur&family=Irish+Grover&family=Poppins:wght@100;200&family=Roboto:wght@300&family=Ubuntu:wght@300&family=Zen+Antique&family=Zen+Kurenaido&display=swap" rel="stylesheet">
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
        </nav>
    </header>
      <div class="reserveercontainer"><b>Maak hieronder je reservering!</b></div>
        <div class="hierkunjereserveren">
          <div class="reserveerafbeelding2">
            <form class="reserveerform" action="index.php" method="post">
              <div class="reserveerform">
              <label for="uname"><b class="bnaam">Naam</b></label>
              <input class="reserveerinput" type="text" placeholder="Naam..." name="uname" required>
              <label for="date"><b class="datum">Datum</b></label>
              <input class="reserveerinputdate" type="date" placeholder="Datum..." name="date" required>
              <label for="person"><b class="bnaam">Aantal personen</b></label>
              <input class="reserveerinput" type="person" placeholder="Aantal personen..." name="person" required>
              <button class="reserveerbutton">Reserveer</button>
            </form>
          </div>
        </div>
      </div>
    <?php 
      // require_once('includes/connect.php');

      // if(isset($_POST['button'])) {

      // }
  
      // $sql = "INSERT INTO todos (todo, gedaan)";
      // $stmt = $connect->prepare($sql);
      // $stmt = bindParam(':todo', $todo);
      // $stmt = bindParam(':gedaan', $gedaan);
      // $stmt->execute();
  
      // header('Location: ../index.php');
      //     exit();
      // } else {
      // header('Location: ../index.php');
      //   exit();
      // }
    ?>
    <!-- <div class="drankenbody">
    <div class="drankencontainer">
        <img src="Image/cola.webp" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div> ----------------->
<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
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
                <div class="social"><li><b>Volg ons op</b></li>
                <div class="footerimg">
                    <img src="Image/facebook.svg" alt="facebook">
                    <img src="Image/twitter.svg" alt="twitter">
                    <img src="Image/instagram.svg" alt="instagram">
                    <img src="Image/youtube.svg" alt="youtube">
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