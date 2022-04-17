<?php 
    include_once('includes/header.php');
?>
<?php
    require_once('includes/connect.php');
      
    $sql = "SELECT * FROM reserveren";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result_reserveren = $stmt->fetchAll();

    if (!empty($result_reserveren)) {
    foreach ($result_reserveren as $reserveren) {
      echo "<div class='reserveercontainer'><p>Maak hieronder je reservering!</p></div>";
        echo "<div class='hierkunjereserveren'>";
          echo "<div class='reserveerafbeelding2'>";
          echo "<div class='reserveerform'>";
            echo "<label for='uname'><p class='bnaam'>Naam</p></label>";
            echo "<input class='reserveerinput' type='text' placeholder='Naam...' name='uname' {$reserveren['naam']} required>";
            echo "<label for='date'><p class='datum'>Datum</p></label>";
            echo "<input class='reserveerinputdate' type='date' placeholder='Datum...' name='date' {$reserveren['datum']} required>";
            echo "<label for='person'><p class='bnaam'>Aantal personen</p></label>";
            echo "<input class='reserveerinput' type='person' placeholder='Aantal personen...' name='person' {$reserveren['aantal personen']} required>";
            echo "<button class='reserveerbutton'>Reserveer</button>";
            echo "</form>";
          echo "</div>";
        echo "</div>";
      echo "</div>";  
      }
  } else {
      echo "<div></div>";
      $error = "No results!";
  }
?>
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
<?php 
    include_once('includes/footer.php');
?>