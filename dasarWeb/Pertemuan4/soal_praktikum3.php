<p>
    Sebuah restoran memiliki 45 kursi di dalamnya.<br> 
    Pada suatu malam, 28 kursi telah ditempati oleh<br>
    pelanggan. Berapa persen kursi yang masih kosong<br>
    di restoran tersebut?
</p>
<?php
$totalKursi = 45;
$kursiTerpakai = 28;
?>
<br>
<p>
    rumus:
    <br>
    persentase kursi kosong = ((total kursi - kursi terpakai)/total kursi) * 100 =
    <?php
    $persentaseKursiKosong = (($totalKursi - $kursiTerpakai)/$totalKursi) * 100;
    echo $persentaseKursiKosong . '%';
    ?>
</p>
<br>
<p>
    Jadi persentase kursi kosong adalah
    <span style="color : blue">
    <?php
    echo $persentaseKursiKosong . '%';
    ?>
    </span>
</p>