<?php 
    include_once('includes/header.php');
?>
<?php
    require_once('includes/connect.php');
  
    $sql = "SELECT * FROM producten";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result_producten = $stmt->fetch();
?>
    <script src="JS/main.js"></script>
</body>
</html>

<?php 
    include_once('includes/footer.php');
?>