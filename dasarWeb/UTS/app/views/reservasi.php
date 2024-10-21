<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>reservasi</title>
    <link rel="stylesheet" href="../styles/tempat.css">
</head>

<body>
    <div class="container-dash">
        <a href="../../public/index.php?action=reservasi">
            <div class="frame">
                <h3>tempat</h3>
            </div>
        </a>
    </div>
    <div>
            <?php
            if (isset($_SESSION["info"])) {
                ?>
                <table>
                    <tr>
                        <th>id</th>
                        <th>hari</th>
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
                <?php
            }
            ?>
    </div>
    <form action="../../public/index.php?action=pesanTempat" method="post">
        <input type="text" name="tempat_id" id="tempat_id" required>
        <input type="date" name="hari" id="hari" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>
        <input type="submit" value="pesan">
    </form>
</body>

</html>