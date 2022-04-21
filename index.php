<?php 
    include_once('includes/header.php');
?>
    <div class="home-body">
        <div class="home-img">
            <p class="home-img-txt">Welkom bij New York Pizza</p>
        </div>    
        <div class="slideshow-container">
            <div class="slides fade">
            <img src="image/ss1.jpeg" style="width:100%">
            <div class="text"></div>
            </div>
            <div class="slides fade">
            <img src="image/ss2.jpeg" style="width:100%">
            <div class="text"></div>
            </div>
            <div class="slides fade">
            <img src="image/ss3.jpeg" style="width:100%">
            <div class="text"></div>
            </div>
            <div class="slides fade">
            <img src="image/ss4.jpeg" style="width:100%">
            <div class="text"></div>
            </div>
            <div class="slides fade">
            <img src="image/ss5.jpeg" style="width:100%">
            <div class="text"></div>
            </div>
            <div class="slides fade">
            <img src="image/ss6.jpeg" style="width:100%">
            <div class="text"></div>
            </div>
        </div>
    </div>
            <script>
                var slideIndex = 0;
                carousel();

                function carousel() {
                var i;
                var x = document.getElementsByClassName("slides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > x.length) {
                    slideIndex = 1;
                }
                x[slideIndex - 1].style.display = "block";
                setTimeout(carousel, 3000);
                }
            </script>
<?php 
    include_once('includes/footer.php');
?>