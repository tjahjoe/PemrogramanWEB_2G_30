<!DOCTYPE html>
<html>
<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>

<body>
    <nav>
        <div class="box-nav">
            <?php
            $pilihan = ['menu', 'reservasi', 'login', 'logout'];
            $uri = ['../../public/index.php?action=menu', '../../public/index.php?action=reservasi', '../../public/index.php?action=login', '../../public/index.php?action=logout'];
            for ($i = 0; $i < count($pilihan); $i += 1) {
                echo
                    "<a href=\"$uri[$i]\">
                <div class=\"frame\">
                   <h4>$pilihan[$i]</h4>
                </div>
                </a>";
            }
            ?>

        </div>
    </nav>
    <header>
        <h1 class="elrest">
            selamat datang di elrest
        </h1>
    </header>
    <div class="container">
        <div class="container-two">
            <div class="box-content">
                <img src="../images/familytime.jpg" alt="">
                <br>
                <br>
                <br>
                <h3>family time</h3>
            </div>
            <div class="box-content">
                <img src="../images/metime.png" alt="">
                <br>
                <br>
                <br>
                <h3>me time</h3>
            </div>
        </div>
        <div class="container-two">
            <div class="box-content">
                <img src="../images/friendtime.png" alt="">
                <br>
                <br>
                <br>
                <h3>friend time</h3>
            </div>
            <div class="box-content">
                <img src="../images/escapetime.jpg" alt="">
                <br>
                <br>
                <br>
                <h3>escape time</h3>
            </div>
        </div>
    </div>
    <footer></footer>
    <script>

    </script>
</body>

</html>