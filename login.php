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
<body class="inlogbody">
    <div class="inlogformulier">
    <form class="inlogform" action="index.php" method="post">Inloggen

  <div class="container">
    <label for="uname"><b>Naam</b></label>
    <input class="inloginput" type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Wachtwoord</b></label>
    <input class="inloginput" type="password" placeholder="Enter Password" name="psw" required>

    <label>
      <input class="inloginput" type="checkbox" checked="checked" name="remember"> Remember me
    </label>

    <button class="submit" type="submit">Login</button>
    Nog geen account?
    <button class="maak-een-account" type="maak-een-account">Maak een account</button>
  </div>
</form>
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
    <!-- <script src="JS/main.js"></script> -->
</body>
</html>