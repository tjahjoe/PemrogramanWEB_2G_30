<?php
session_start();
unset($_SESSION['pesan']);
?>
<!DOCTYPE html>
<html>

<head>
    <title>menu</title>
    <link rel="stylesheet" href="../styles/menu.css">
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
    <!-- <div class="container"> -->
    <form action="../../public/index.php?action=pesan" method="post">
        <div class="container">
            <div class="txt">
                <h2>
                    makan <br>
                    biar apa?? <br><br><br>
                    biarin <br>
                    xixixi
                </h2>
            </div>
            <table>
                <tr>
                    <th>nama</th>
                    <th>harga</th>
                    <th>pesan</th>
                </tr>
                <?php
                if (isset($_SESSION["menu"])) {
                    foreach ($_SESSION["menu"] as $row) {
                        echo "<tr>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['harga'] . "</td>";
                        $menuId = $row['menu_id'];
                        $jumlahPesanan = isset($_SESSION['jumlahPesanan'][$menuId]) ? $_SESSION['jumlahPesanan'][$menuId] : '';
                        echo "<td class=\"td-center\">
                            <input type=\"number\" min=\"0\" step=\"1\" name=\"pesanan[$menuId]\" value=\"$jumlahPesanan\">
                          </td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
            <div class="inp">
                <input type="submit" value="pesan">
            </div>

        </div>
    </form>
    <!-- </div> -->
    <script>
    </script>
</body>

</html>