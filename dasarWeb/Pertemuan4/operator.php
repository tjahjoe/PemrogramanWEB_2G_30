<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo
"<style>
*{
    margin : 0;
    padding : 0;
}
span{
    color : blue;
}
</style>
";

echo 
"
<p>a = 
    <span>{$a}</span>
</p>

<p>
b = 
    <span>{$b}</span>
</p>

<p>
hasil a + b = 
    <span>{$hasilTambah}</span>
</p>

<p>hasil a - b = 
    <span>{$hasilKurang}</span>
</p>
<p>

hasil a * b = 
    <span>{$hasilKali}</span>
</p>

<p>hasil a / b = 
    <span>{$hasilBagi}</span>
</p>

<p>
hasil a % b = 
    <span>{$sisaBagi}</span>
</p>

<p>
hasil a ** b = 
<span>{$pangkat}</span>
</p>
";

echo
"
<br><br>
";

echo
"
<p>
hasil a == b = 
    <span>{$hasilSama}</span>
</p>

<p>hasil a != b = 
    <span>{$hasilTidakSama}</span>
</p>
<p>

hasil a < b = 
    <span>{$hasilLebihKecil}</span>
</p>

<p>hasil a > b = 
    <span>{$hasilLebihBesar}</span>
</p>

<p>
hasil a <= b = 
    <span>{$hasilLebihKecilSama}</span>
</p>

<p>
hasil a >= b = 
    <span>{$hasilLebihBesarSama}</span>
</p>
";

echo
"
<br><br>
";

echo
"
<p>
hasil a && b =
    <span>{$hasilAnd}</span>
</p>
<p>
hasil a || b =
    <span>{$hasilOr}</span>
</p>
<p>
hasil !a =
    <span>{$hasilNotA}</span>
</p>
<p>
hasil !b =
    <span>{$hasilNotB}</span>
</p>
";
?>
<br>
<br>
<p>
    hasil a += b adalah
    <span><?php
    $a += $b; 
    echo $a;
    ?>
    </span>
</p>
<p>
    hasil a -= b adalah
    <span><?php
    $a -= $b; 
    echo $a;
    ?>
    </span>
</p>
<p>
    hasil a *= b adalah
    <span><?php
    $a *= $b;
    echo $a;
    ?>
    </span>
</p>
<p>
    hasil a /= b adalah
    <span><?php
    $a /= $b;
    echo $a;
    ?>
    </span>
</p>
<p>
    hasil a %= b adalah
    <span><?php
    $a %= $b;
    echo $a;
    ?>
    </span>
</p>

<?php
$hasilIdentik = $a === $b;
$hasilTiakIdentik = $a !== $b;
?>
<br>
<br>    
<p>
    hasil identik a dengan b adalah
    <span>
        <?php
        echo $hasilIdentik;
        ?>
    </span>
</p>
<p>
    hasil tidak identik a dengan b adalah
    <span>
        <?php
        echo $hasilTiakIdentik;
        ?>
    </span>
</p>
