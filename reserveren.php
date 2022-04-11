<?php 
    include_once('includes/header.php');
?>
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
        <img src="image/cola.webp" alt="" />
        <form action="winkelwagen.php">
          <input class="bestelknop" type="submit" value="Bestel" />
        </form>
      </div> ----------------->
    <script src="JS/main.js"></script>

<?php 
    include_once('includes/footer.php');
?>