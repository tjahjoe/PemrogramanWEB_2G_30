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
                <!-- <thead> -->
                    <tr>
                    <th>menu</th>
                    <th>harga</th>
                    <th>pesan</th>
                </tr>
                <!-- </thead>
                <tbody> -->
                
                <?php
                if (isset($_SESSION["menu"])) {
                    ?>
                    <script>
                        const a = <?php echo json_encode($_SESSION["menu"]); ?>;
                    </script>
                    <?php
                    foreach ($_SESSION["menu"] as $row) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars(strtolower($row['nama']))  . "</td>";
                        echo "<td>rp. " . htmlspecialchars($row['harga'])  . "</td>";
                        $menuId = $row['menu_id'];
                        $jumlahPesanan = isset($_SESSION['jumlahPesanan'][$menuId]) ? $_SESSION['jumlahPesanan'][$menuId] : '';
                        echo "<td class=\"td-center\">
                            <input type=\"number\" min=\"0\" step=\"1\" name=\"pesanan[$menuId]\" value=\"$jumlahPesanan\">
                          </td>";
                        echo "</tr>";
                    }
                }
                ?>
                <!-- </tbody> -->
            </table>
            <div class="inp">
                <div class="spc" >
                    <input type="submit" value="pesan">
                </div>
                <div class="spc" >
                    <div class="cek" id="btn">
                        <p>cek</p>
                    </div>
                </div>
                <div class="spc" >
                    <h4 id="check">
                        total :
                    </h4>
                </div>
            </div>
        </div>
    </form>
    <script>
        const element = document.getElementById("btn");
        element.addEventListener("click", myFunction);

        function myFunction() {
            let jumlah = 0;
            for (let i = 0; i < a.length; i++) {
                let menu_id = a[i]['menu_id']
                let harga = a[i]['harga']
                let pesanan = document.getElementsByName(`pesanan[${menu_id}]`)[0].value
                if (pesanan != "" && pesanan != 0) {
                    jumlah += pesanan * harga
                }
            }
            document.getElementById("check").innerHTML = "total : rp. " + jumlah + ".00"
        }
    </script>
</body>

</html>