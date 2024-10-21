<?php
session_start();
unset($_SESSION['lantai']);
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
    <?php
    if (isset($_SESSION['tempat'])) {
        echo "<form action=\"../../public/index.php?action=pesanTempat&lantai=" . $_SESSION['tempat'][0]['lantai'] . "\" method=\"post\">";
        echo "<select name=\"tempat_id\" id=\"tempat_id\">";
        foreach ($_SESSION['tempat'] as $row) {
            echo "<option value=\"" . $row['tempat_id'] . "\"> " . $row['tempat_id'] . "</option>";
        }
    }
    ?>
    </select>
    <input type="date" name="hari" id="hari" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>
    <input type="submit" value="pesan">
    </form>
</body>

</html>