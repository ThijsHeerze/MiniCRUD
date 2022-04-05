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
  <body class="inlogbody">
    <div class="inlogformulier">
      <form class="inlogform" action="index.php" method="post"><div class="inloggen"><b>Hier kun je inloggen</b></div>
        <div class="container">
        <label for="uname"><b>Naam</b></label>
        <input class="inloginput" type="text" placeholder="Enter Username" name="uname" required>
        <label for="psw"><b>Wachtwoord</b></label>
        <input class="inloginput" type="password" placeholder="Enter Password" name="psw" required>
        <button class="submit" type="submit">Inloggen</button>
      </form>
    </div>
  </div>  
<script>

  const inputs = document.querySelectorAll("form input");
  const button = document.querySelector("form button");

  button.addEventListener("click", (e) => {
    e.preventDefault();
    
    for (let i = 0; i < inputs.length; i++) {
        if (!inputs[i].value.length) {
            inputs[i].style.border = "1px solid red";
        }
    }
  });
</script>
<?php
      // include('includes/connect.php');

      // $host = "localhost";
      // $username = "root";
      // $pass = "";
      // $dbname = "Restaurant";

    // $dsn = "mysql:host=$host;dbname=$dbname;chartset=";
    // $opt = [
    //     PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_DEFAULT_FETCH_MODE =>  PDO::FETCH_ASSOC,
    //     PDO::ATTR_EMULATE_PREPARES =>  false,
    // ];

    // try {
    //     $connect = new PDO($dsn, $username, $pass, $opt);
    //     echo "Verbinden is gemaakt.";
    // }
    // catch (PDOException $e) {
    //     echo $e->getMessage();
    //     die("Sorry, Database probleem");
    // }


    // try {
    //     $pdo = new PDO($dsn, $username, $password);        
    // } catch (\PDOException $e) {
    //     throw new \PDOException($e->getMessage(), (int)$e->getCode());
    // }

    // $name = $_POST['name'];
    // $surname = $_POST['surname'];
    // $gender = $_POST['gender'];

    // $sql = "INSERT INTO users (name, surname, sex) VALUES (?,?,?)";
    // $stmt= $pdo->prepare($sql);
    // $stmt->execute([$name, $surname, $sex]);
?>
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