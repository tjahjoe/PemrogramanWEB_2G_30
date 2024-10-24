<?php
session_start();
unset($_SESSION['lantai']);
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html>

<head>
    <title>reservasi</title>
    <link rel="stylesheet" href="../styles/reservasiRiwayat.css">
</head>

<body>
    <div class="container-dash">
        <a href="../../public/index.php?action=reservasi">
            <button class="frame">
                <h3>tempat</h3>
            </button>
        </a>
    </div>
    <br>
    <br>
    <div class="container">
        <?php
        if (isset($_SESSION["info"])) {
            ?>
            <h3>dipesan</h3>
            <br>
            <div class="spc">
                <table>
                    <tr>
                        <th>id</th>
                        <th>tanggal</th>
                        <th>ukuran</th>
                    </tr>
                    <?php
                    foreach ($_SESSION["info"] as $row) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars(strtolower($row['tempat_id'])) . "</td>";
                        echo "<td>" . htmlspecialchars(strtolower($row['hari'])) . "</td>";
                        echo "<td>" . htmlspecialchars(strtolower($row['ukuran'])) . " orang</td>";
                        echo "<tr>";
                    } ?>
                </table>
            </div>
            <br>
            <br>
            <?php
        }
        ?>
        <?php
        if (isset($_SESSION['tempat'])) {
            ?>
            <div class="tempat">
                <br>
                <h3>informasi</h3>
                <br>
                <div class="spc">
                    <table>
                        <tr>
                            <th>id</th>
                            <th>ukuran</th>
                            <th>harga</th>
                        </tr>
                        <?php
                        foreach ($_SESSION["tempat"] as $row) {
                            echo "<tr>";
                            echo "<td class=\"td-clr\">" . htmlspecialchars(strtolower($row['tempat_id'])) . "</td>";
                            echo "<td class=\"td-clr\">" . htmlspecialchars(strtolower($row['ukuran'])) . "</td>";
                            echo "<td class=\"td-clr\">rp. " . htmlspecialchars(strtolower($row['harga'])) . "/hari</td>";
                            echo "<tr>";
                        } ?>
                    </table>
                </div>
                <br>
                <br>
                <br>
                <h3>pesan</h3>
                <br>
                <div class="spc">
                    <div class="pesan">
                        <?php
                        echo "<form action=\"../../public/index.php?action=pesanTempat&lantai=" . $_SESSION['tempat'][0]['lantai'] . "\" method=\"post\">";
                        echo "<label for=\"tempat_id\">id</label>";
                        echo "<br>";
                        echo "<select name=\"tempat_id\" id=\"tempat_id\">";
                        foreach ($_SESSION['tempat'] as $row) {
                            echo "<option value=\"" . $row['tempat_id'] . "\"> " . htmlspecialchars(strtolower($row['tempat_id'])) . "</option>";
                        }
                        echo "</select>";
                        echo "<br>";
                        echo "<br>";
                        echo "<label for=\"hari\">tanggal</label>";
                        echo "<br>";
                        echo "<input type=\"date\" name=\"hari\" id=\"hari\" min=\"" . date('Y-m-d', strtotime('+1 day')) . "\" required>";
                        echo "<br>";
                        echo "<br>";
                        echo "<input type=\"submit\" value=\"pesan\">";
                        echo "</form>";
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</body>

</html>