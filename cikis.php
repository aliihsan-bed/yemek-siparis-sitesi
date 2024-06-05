<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<body>
    <?php 
    session_unset();
    session_destroy();
    header("Location:home.php");
    ?>
</body>
</html>