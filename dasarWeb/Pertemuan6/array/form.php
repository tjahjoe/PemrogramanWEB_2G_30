<?php
$datas = [
    ["Andi", 15, "10A", "malang"],
    ["Siti", 16, "10B", "Batu"],
    ["Budi", 15, "10A", "dinoyo"],
    ["Anton", 25, "15A", "dinoyo"]
];

$rataRata = 0;
foreach ($datas as $data){
    $rataRata += $data[1];
}
$rataRata /= count($datas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>form</title>
    <link rel="stylesheet" href="form.css">
    <script src="jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function(){
                $("#btn").click(function(){
                    $("#kotak").slideToggle("slow")
                })
            })
        </script>
</head>
<body>
    <h1>Data Siswa</h1>
    <div class="flip brd" id="btn">
        <h3>KLIK</h3>
    </div>
    <div id="kotak" >
        <div class="box">
            <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php
            // echo "<tr>";
            foreach ($datas as $data){
                echo "<tr>";
                foreach ($data as $d){
                    echo "<td>" . $d . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        </div>
        <div class="flip">
            <h3>
                Rata-Rata : 
                <?php
                echo $rataRata;
                ?>
            </h3>
        </div>
    </div>
</body>
</html>