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