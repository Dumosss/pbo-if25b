<?php

require('./Jasa.php');

use Pbo\Marketplace\Jasa;

//objek
$produk = new Jasa();
$produk->setKode("P001")
        ->setNama("Laptop")
        ->setHarga(1000000)
        ->setStok(5);

//output
echo "Produk: ".$produk->getNama();
echo "<br/>";

echo "Harga: Rp.".$produk->getHarga();
echo "<br/>";

echo "Stok: ".$produk->getStok();
echo "<br/>";   

echo "Pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp.".$produk->total();
echo "<br/>";

echo "Metode pembayaran: ".$produk->payment('qris');