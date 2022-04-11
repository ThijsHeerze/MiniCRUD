<?php 
    include_once('includes/header.php');
?>
  <body class="inlogbody">
    <div class="inlogformulier">
      <form class="inlogform" action="index.php" method="post"><div class="inloggen"><b>Log in</b></div>
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
<script src="JS/main.js"></script>
<?php 
    include_once('includes/footer.php');
?>