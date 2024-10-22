<?php
session_start();
unset($_SESSION['lantai']);
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html>

<head>
    <title>reservasi</title>
    <link rel="stylesheet" href="../styles/reservasi.css">
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
        if (isset($_SESSION["riwayatReservasi"])) {
            ?>
            <h3>reservasi</h3>
            <br>
            <div class="spc">
                <table>
                    <tr>
                        <th>id</th>
                        <th>lantai</th>
                        <th>ukuran</th>
                        <th>harga</th>
                        <th>tanggal</th>
                    </tr>
                    <?php
                    foreach ($_SESSION["riwayatReservasi"] as $row) {
                        $lantai = htmlspecialchars($row['lantai']) == 11 ? '1 outdor' : htmlspecialchars($row['lantai']);
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars(strtolower($row['tempat_id'])) . "</td>";
                        echo "<td>" . htmlspecialchars(strtolower($lantai)) . "</td>";
                        echo "<td>" . htmlspecialchars(strtolower($row['ukuran'])) . " orang</td>";
                        echo "<td>rp. " . htmlspecialchars(strtolower($row['harga'])) . "/hari</td>";
                        echo "<td>" . htmlspecialchars(strtolower($row['hari'])) . "</td>";
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
        if (isset($_SESSION['riwayatPesanan'])) {
            ?>
            <div class="tempat">
                <br>
                <h3>pesanan</h3>
                <br>
                <div class="spc">
                    <table>
                        <tr>
                            <th>id</th>
                            <th>nama</th>
                            <th>jumlah</th>
                            <th>harga</th>
                            <th>status</th>
                        </tr>
                        <?php
                        foreach ($_SESSION["riwayatPesanan"] as $row) {
                            echo "<tr>";
                            echo "<td class=\"td-clr\">" . htmlspecialchars(strtolower($row['menu_id'])) . "</td>";
                            echo "<td class=\"td-clr\">" . htmlspecialchars(strtolower($row['nama'])) . "</td>";
                            echo "<td class=\"td-clr\">" . htmlspecialchars(strtolower($row['jumlah'])) . "</td>";
                            echo "<td class=\"td-clr\">rp. " . htmlspecialchars(strtolower($row['harga'])) . "/porsi</td>";
                            $isAktif = $row['status'] == 'aktif' ? "<td class=\"td-clr\">" . htmlspecialchars(strtolower($row['status'])) . "</td>" : 
                                "<td>" . htmlspecialchars(strtolower($row['status'])) . "</td>";
                            echo $isAktif;
                            echo "<tr>";
                        } ?>
                    </table>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</body>

</html>