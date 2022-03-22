<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="Css\style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ceviche+One&family=Fruktur&family=Irish+Grover&family=Poppins:wght@100;200&family=Roboto:wght@300&family=Ubuntu:wght@300&family=Zen+Antique&family=Zen+Kurenaido&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body class="indexbody">
    <header>
      <div class="header"></div>
      <nav>
        <!-- <input class="searchbar" type="text" placeholder="Search.."> -->
        <ul class="leftul">
          <li><a href="index.php">Home</a></li>
          <li><a href="pizza.php">Pizza's</a></li>
          <li><a href="dranken.php">Dranken</a></li>
        </ul>
        <div class="logo">
          <img src="Image/nyplogo.png" alt="logo" />
        </div>
        <ul class="rightul">
          <li><a href="winkelwagen.php">Winkelwagen</a></li>
          <li><a href="login.php">Inloggen</a></li>
        </ul>
      </nav>
    </header>
    <div class="bestellen"><h3><b>Maak je keuze</b></h3></div>
    <div class="pizzabody">
      <div class="pizzacontainer">
        <form action="winkelwagen.php">
          <label class="lso" for="pizza">Pizza</label>
          <select id="pizza" name="pizza">
            <!-- <option value="pizza">Margarita</option> -->
          </select>
          <input type="submit" value="Bestel" />
          <img src="Image/mozzarella.jpg" alt="" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/pizzab.jpeg" alt="" />
        <form action="winkelwagen.php">
          <label for="pizza">Pizza</label>
          <select id="pizza" name="pizza">
            <option value="pizza">Hawai</option>
          </select>
          <input type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/salami.jpeg" alt="" />
        <form action="winkelwagen.php">
          <label for="pizza">Pizza</label>
          <select id="pizza" name="pizza">
            <option value="pizza">Salami</option>
          </select>
          <input type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/pizzaei.jpeg" alt="" />
        <form action="winkelwagen.php">
          <label for="pizza">Pizza</label>
          <select id="pizza" name="pizza">
            <option value="pizza">Mozzarella</option>
          </select>
          <input type="submit" value="Bestel" />
        </form>
      </div>
    </div>
    <div class="pizzabody">
      <div class="pizzacontainer">
        <img src="Image/pizzab.jpeg" alt="" />
        <form action="winkelwagen.php">
          <label for="pizza">Pizza</label>
          <select id="pizza" name="pizza">
            <option value="pizza">Mozzarella</option>
          </select>
          <input type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/pizzawortel.jpeg" alt="" />
        <form action="winkelwagen.php">
          <label for="pizza">Pizza</label>
          <select id="pizza" name="pizza">
            <option value="pizza">Mozzarella</option>
          </select>
          <input type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/pizzaolijven.jpeg" alt="" />
        <form action="winkelwagen.php">
          <label for="pizza">Pizza</label>
          <select id="pizza" name="pizza">
            <option value="pizza">Mozzarella</option>
          </select>
          <input type="submit" value="Bestel" />
        </form>
      </div>
      <div class="pizzacontainer">
        <img src="Image/pizzatomaat.jpeg" alt="" />
        <form action="winkelwagen.php">
          <label for="pizza">Pizza</label>
          <select id="pizza" name="pizza">
            <option value="pizza">Mozzarella</option>
          </select>
          <input type="submit" value="Bestel" />
        </form>
      </div>
    </div>

    <div class="pizzabody">
        <div class="pizzacontainer">
          <img src="Image/pizzab.jpeg" alt="" />
            <input type="submit" value="Bestel" />
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
            <button class="submit" type="submit">Login</button>
            <button class="maak-een-account" type="maak-een-account">
              Maak een account
            </button>
          </div>
        </div>
      </div>
    </footer>
    <script src="JS/main.js"></script>
  </body>
</html>
