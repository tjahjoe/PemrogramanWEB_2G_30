<!-- soal 5.1 -->
<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai) {
    if($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);
?>

<!-- soal 5.2 -->
<br>
<hr>
<?php
$daftarKaryawan = [
    ["Alice", 7],
    ["Bob", 3],
    ["Charlie", 9],
    ["David", 5],
    ["Eva", 6]
];

$karyawanPengalamLimaTahun = [];

foreach($daftarKaryawan as $karyawan){
    if($karyawan[1] > 5){
        $karyawanPengalamLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamLimaTahun)
?>