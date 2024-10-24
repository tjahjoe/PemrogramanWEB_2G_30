<?php
session_start();
unset($_SESSION['pesan']);
unset($_SESSION['lantai']);
unset($_SESSION['riwayatPesanan']);
unset($_SESSION['riwayatReservasi']);
unset($_SESSION['info']);
unset($_SESSION['tempat']);
unset($_SESSION['menu']);
?>
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
            $pilihan = ['menu', 'reservasi', 'riwayat', 'masuk'];
            $uri = [
                '../../public/index.php?action=menu',
                '../../public/index.php?action=reservasi',
                '../../public/index.php?action=riwayat',
                '../../public/index.php?action=login'
            ];
            for ($i = 0; $i < count($pilihan); $i += 1) {
                echo
                    "<a href=\"$uri[$i]\">
                <button class=\"frame\">
                   <h4>$pilihan[$i]</h4>
                </button>
                </a>";
            }
            ?>
        </div>
    </nav>
    <header>
        <h1 class="elrest">
            <?php
            if (isset($_SESSION["user"])) {
                echo "halo " . htmlspecialchars(strtolower($_SESSION["user"]["nama"]));
                echo "<br>";
            }
            ?>
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
    <br>
    <br>
    <div class="spc">
        <a href="../../public/index.php?action=logout">
            <button class="btn">
                <h3>keluar</h3>
            </button>
        </a>
    </div>
</body>

</html>