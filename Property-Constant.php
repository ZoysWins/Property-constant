<?php

class produk {
    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;
    public const PAJAK = 0.11;
}
// objek
$produk = new produk();
$produk->kode = 'p0001';
$produk->nama = 'laptop';
$produk->harga = '10000000';
$produk->stock ='5';

// hitung pajak 
$pajak = produk :: PAJAK * 100;
$jumlahpajak = $produk->harga * produk::PAJAK;

//total
$total = $produk->harga + $jumlahpajak ;

//hasil
echo"produk:".$produk->nama;
echo"<br>";

echo"harga:" .$produk->harga;
echo"<br>";

echo"stok:".$produk->stock;
echo"<br>";

echo"pajak:". $pajak."%";
echo"<br>";

echo"Total Harga setelah pajak:" .$total;



