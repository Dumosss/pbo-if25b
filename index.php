<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//objek
$produk = new Produk();
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