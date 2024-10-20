<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>

<body>
    <nav>
        <div class="box-nav">
            <?php
            $pilihan = ['MENU', 'RESERVASI', 'LOGIN', 'LOGOUT'];
            $uri = ['../../public/index.php?action=menu','','','../../public/index.php?action=logout'];
            for ($i = 0; $i < count($pilihan); $i += 1) {
                echo 
                "<a href=\"$uri[$i]\">
                <div class=\"frame\">
                    $pilihan[$i]
                </div>
                </a>";
            }
            ?>

        </div>
    </nav>
    <header></header>
    <div></div>
    <footer></footer>
    <script>

    </script>
</body>

</html>