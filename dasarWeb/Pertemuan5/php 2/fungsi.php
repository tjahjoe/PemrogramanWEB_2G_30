<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya " . $nama ."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}
perkenalan("Wahyu", "Hallo");
echo "<hr>";

$saya = "Wahyu";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>

<br><br>

<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2004, 2024) . "tahun";
?>