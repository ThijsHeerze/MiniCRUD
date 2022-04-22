<?php 
    include_once('includes/header.php');
?>
      <div class='reserveercontainer'><p>Maak hieronder je reservering!</p></div>
        <div class='hierkunjereserveren'>
          <div class='reserveerafbeelding2'>
            <form class='reserveerform' method="post" action="php/addReservation.php">
              <label for='uname'><p class='bnaam'>Naam</p></label>
              <input class='reserveerinput' type='text' placeholder='Naam...' name='naam' required>
              <label for='date'><p class='datum'>Datum</p></label>
              <input class='reserveerinputdate' type='date' placeholder='Datum...' name='datum' required>
              <label for='person'><p class='bnaam'>Aantal personen</p></label>
              <input class='reserveerinput' type='person' placeholder='Aantal personen...' name='aantal' required>
              <button class='reserveerbutton' type="submit" name="reserveren">Reserveer</button>
            </form>
          </div>
        </div>
      </div> 
<?php 
    include_once('includes/footer.php');
?>