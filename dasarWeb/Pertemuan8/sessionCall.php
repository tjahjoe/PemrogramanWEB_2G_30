<?php
session_start();
?>
<DOCTYPE html>
<html>
    <body>
        <?php
        echo 'Favorite colo r is ' . $_SESSION['favcolor'] . ".<br>"; 
        echo 'Favorite animal r is ' . $_SESSION['favanimal'] . "."; 
        ?>
    </body>
</html>