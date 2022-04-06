<?php 
    include_once('includes/header.php');
?>

    <?php
    // require_once('includes/connect.php');

    // $sql = "SELECT * FROM todos";
    // $stmt = $connect->prepare($sql);
    // $stmt->execute();
    // $result = $stmt->fetchAll();

    // foreach ($result as $todo) {

    // }
    ?>
    <div class="homebody">
        <div class="homecontainer">
            <div class="homeimg"></div>
        </div>
    </div>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore voluptatibus blanditiis molestiae magni in illum, officiis totam itaque adipisci. Similique necessitatibus id blanditiis laborum dolor corrupti sapiente possimus debitis qui?
<div class="slideshowcontainer">
    <!-- <img class="mySlides" src="image/pizza.jpg">
    <img class="mySlides" src="image/pizza2.jpg"> -->
    <!-- <img class="mySlides" src="image/pizza3.jpg">
    <img class="mySlides" src="image/pizza4.jpg">
    <img class="mySlides" src="image/pizza5.jpg"> -->
    
    <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

    <!-- <div class="slideshowcontainer">
    <img class="mySlides" src="image/cola.png">
    <img class="mySlides" src="image/fanta.png.crdownload">
    <img class="mySlides" src="image/redbull.png"> -->
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
   

<?php 
    include_once('includes/footer.php');
?>