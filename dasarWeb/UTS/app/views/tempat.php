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
            <button class="frame">
                <h3>dashboard</h3>
            </button>
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
            '../../public/index.php?action=info&lantai=4',
            '../../public/index.php?action=info&lantai=3',
            '../../public/index.php?action=info&lantai=2',
            '../../public/index.php?action=info&lantai=1',
            '../../public/index.php?action=info&lantai=11'
        ];
        for ($i = 0; $i < count($pilihan); $i += 1) {
            echo "<div class=\"spc\">";
            echo "<a href=\"$uri[$i]\">";
            echo "<div class=\"box $spesifik[$i]\">";
            echo "<img src=\"../images/$gambar[$i]\" alt=\"\">";
            echo "<h4>$pilihan[$i]</h4>";
            echo "</div>";
            echo "</a>";
            echo "</div>";
            echo "<br>";
            echo "<br>";
        }
        ?>
    </div>
</body>

</html>