<?php
session_start();
unset($_SESSION['pesan']);
?>
<!DOCTYPE html>
<html>

<head>
    <title>tempat</title>
    <link rel="stylesheet" href="../styles/tempat.css">
</head>

<body>
    <div class="container-dash">
        <a href="../../public/index.php?action=dashboard">
            <div class="frame">
                <h3>dashboard</h3>
            </div>
        </a>
    </div>
    <br>
    <br>
    <div class="container">
        <?php
        $pilihan = ['lantai iv', 'lantai iii', 'lantai ii', 'lantai i', 'lantai i outdoor'];
        $gambar = ['lt4.jpg', 'lt3.jpg', 'lt2.jpg', 'lt1.jpg', 'outdoor.jpg'];
        $spesifik = ['iv', 'iii', 'ii', 'i', 'io'];
        $uri = [
            '../../public/index.php?action=riwayat&lantai=4',
            '../../public/index.php?action=riwayat&lantai=3',
            '../../public/index.php?action=riwayat&lantai=2',
            '../../public/index.php?action=riwayat&lantai=1',
            '../../public/index.php?action=riwayat&lantai=11'
        ];
        for ($i = 0; $i < count($pilihan); $i += 1) {
            echo
                "<div class=\"spc\">
                    <a href=\"$uri[$i]\">
                        <div class=\"box $spesifik[$i]\">
                            <img src=\"../image/$gambar[$i]\" alt=\"\">
                            <h4>$pilihan[$i]</h4>
                        </div>
                    </a>
                </div>
                <br>
                <br>";
        }
        ?>
    </div>
</body>

</html>