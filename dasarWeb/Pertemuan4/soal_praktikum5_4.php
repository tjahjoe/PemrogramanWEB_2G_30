<?php
$nilaiMatematika = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];
$rataRata = 0;
?>
<table border=1 style="text-align : center;">
    <tr>
        <th>Nama</th>
        <th>Nilai</th>
    </tr>
<?php
foreach($nilaiMatematika as $nilai){
    $rataRata += $nilai[1];
    echo 
    "<tr>
        <td>$nilai[0]</td>
        <td>$nilai[1]</td>
    </tr>
    ";
}
$rataRata /= count($nilaiMatematika);
?>
</table>
<p>
    <?php
    echo "Nilai rata-rata: " . $rataRata . "<br>";
    $nilaiMahasiswaDiatasRata = [];
    foreach($nilaiMatematika as $nilai){
        if ($nilai[1] > $rataRata) {
            $nilaiMahasiswaDiatasRata[] = $nilai[0];
        }
    }
    echo "Daftar mahasiswa dengan nilai di atas rata-rata : " . 
    implode(', ', $nilaiMahasiswaDiatasRata)
    ?>
</p>