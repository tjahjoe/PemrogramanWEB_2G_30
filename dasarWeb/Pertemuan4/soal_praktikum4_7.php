<p>
    Seorang pelanggan ingin membeli sebuah <br>
    produk dengan harga Rp 120.000. Toko <br>
    tersebut menawarkan diskon sebesar 20% <br>
    untuk pembelian di atas Rp 100.000. Bantu <br>
    pelanggan ini untuk menghitung harga yang <br>
    harus dibayar setelah mendapatkan diskon. <br>
</p>
<p>
<?php
$harga = 120000;
$diskon = 20/100;
if ($harga > 100000) {
    $harga = $harga - ($harga * $diskon);
}
echo "harga bayar = Rp " . $harga;
?> 
</p>
