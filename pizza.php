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
<body>
    <header>
        <div class="header"></div>
        <nav>
            <div class="logo">
                <img src="Image/nyplogo.png" alt="logo">
            </div>
            <input class="searchbar" type="text" placeholder="Search..">
            <ul>
                <div class="ulborder">
                <li><a href="/acties.php">Acties</a></li>
                <li><a href="/pizza.php">Pizza's</a></li>
                <li><a href="/dranken.php">Dranken</a></li>
                <li><a href="/winkelwagen.php">Winkelwagen</a></li>
                <li><a href="/login.php">Inloggen</a></li></div>
            </ul>
        </nav>
    </header>
<div class="slideshowcontainer">
    <img class="mySlides" src="Image/ss1.png">
    <img class="mySlides" src="Image/ss2.png">
    <img class="mySlides" src="Image/ss3.png">
    <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
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
            </div>
        </div>
    </footer>
    <script src="JS/main.js"></script>
</body>
</html>