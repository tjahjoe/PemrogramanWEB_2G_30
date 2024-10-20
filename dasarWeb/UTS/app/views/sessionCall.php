<?php
session_start();
// echo session_status() === PHP_SESSION_NONE;
echo isset($_SESSION["pesan"]);
?>
<DOCTYPE html>
<html>
    <body>
        <?php
        echo print_r($_SESSION["user"]['telepon']);
        ?>
    </body>
</html>