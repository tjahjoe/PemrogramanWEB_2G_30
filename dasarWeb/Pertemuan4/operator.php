<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo
"<style>
*{
    margin : 0;
    padding : 0;
}
span{
    color : blue;
}
</style>";

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
"
?>