<?php
$nilaiNumerik = 92;
?>
<table border=1 style="text-align : center;">
    <tr>
        <th>Nilai Angka</th>
        <th>Nilai huruf</th>
    </tr>
    <tr>
        <td>90 <= nilai <= 100</td>
        <td>A</td>
    </tr>
    <tr>
        <td>80 <= nilai < 90</td>
        <td>B</td>
    </tr>
    <tr>
        <td>70 <= nilai < 80</td>
        <td>C</td>
    </tr>
    <tr>
        <td>nilai < 70</td>
        <td>D</td>
    </tr>
</table>
<br>
<?php
echo "Nilai angka: $nilaiNumerik<br>";
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br><br><hr>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

echo 
"
jarak awal = $jarakSaatIni <br>
target jarak = $jarakTarget <br>
penambahan jarak dalam satu hari = $peningkatanHarian <br>
";

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
?>