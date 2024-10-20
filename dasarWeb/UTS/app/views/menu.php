<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="../styles/menu.css">
</head>

<body>
    <br>
    <h3>MENU</h3>
    <br>
    <form action="../../public/index.php?action=pesan" method="post" >
        <table>
            <tr>
                <th>MENU ID</th>
                <th>NAMA</th>
                <th>HARGA</th>
                <th>PESAN</th>
            </tr>
            <?php
            if (isset($_SESSION["menu"])) {
                foreach ($_SESSION["menu"] as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['menu_id'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['harga'] . "</td>";
                    echo "<td class=\"td-center\"><input type=\"number\" min=\"0\" step=\"1\" name=\"pesanan[" . $row['menu_id'] . "]\"></td>";
                    echo "</tr>";
                }
            }            
            ?>
        </table>
        <input type="submit" value="Pesan">
    </form>
</body>

</html>