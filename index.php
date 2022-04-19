<?php 
    include_once('includes/header.php');
?>
    <div class="home-body">
        <div class="home-img"><b class="home-img-txt">Welkom bij New York Pizza</b>
    </div>
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