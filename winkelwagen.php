<?php 
    include_once('includes/header.php');
?>
<?php
    require_once('includes/pizza.php');
    // session_start($_GET) {
    // }
  
    $sql = "SELECT * FROM producten";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result_producten = $stmt->fetch();
?>
<script src="JS/main.js"></script>

<?php 
    include_once('includes/footer.php');
?>