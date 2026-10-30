<?php

//panggil file PropertyConstant
require('./Property-Constant.php');

use Pbo\Marketplace\Produk;

//object 
$produk = new Produk('P0001', 'laptop', 10000000, 5);

//hasil
echo "Produk: ". $produk->nama;
echo "<br/>";

echo "Harga: Rp.". $produk->harga;
echo "<br/>";

echo "Stok: ". $produk->stok;
echo "<br/>";

echo "Pajak: ". $produk->pajak() ."%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.". $produk->total();





