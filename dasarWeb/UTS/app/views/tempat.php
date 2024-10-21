<?php
session_start();
?>
<DOCTYPE html>
<html>
    <head>
        <title>tempat</title>
    </head>
    <body>
        <?php
        echo print_r($_SESSION["tempat"]);
        ?>
    </body>
</html>