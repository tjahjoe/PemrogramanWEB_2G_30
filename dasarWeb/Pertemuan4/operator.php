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
"
?>