<p>
    Ada seorang guru ingin menghitung <br>
    total nilai dari 10 siswa dalam ujian <br>
    matematika. Guru ini ingin mengabaikan <br>
    dua nilai tertinggi dan dua nilai terendah. <br> 
    Bantu guru ini menghitung total nilai yang <br>
    akan digunakan untuk menentukan nilai rata-rata <br> 
    setelah mengabaikan nilai tertinggi dan terendah. <br>
    Berikut daftar nilai dari 10 siswa <br>
    (85, 92, 78, 64, 90, 75, 88, 79, 70, 96) <br>
</p>
<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
rsort($nilai);

array_splice($nilai, 0, 2); #menghilangkan 2 nilai tertinggi
array_splice($nilai, count($nilai) - 2, 2); #menghilangkan 2 nilai terendah
?>
<p>
    nilai yang akan dihitung adalah
    <?php
    $totalNilai = 0;
    echo "(";
    foreach($nilai as $n){
        echo $n . ", ";
        $totalNilai += $n;
    }
    echo ")";
    ?>
    <br>
    hasil = 
    <?php
    echo $totalNilai;
    ?>
</p>