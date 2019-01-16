<?php 

// jualan produk
// komik
// game
class Produk {
	public $judul = "judul",
	       $penulis = "penulis",
	       $penerbit = "penerbit",
	       $harga = "0";

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}



 $produk1 = new produk();
 $produk1->judul = "kungfu panda";
 $produk1->penulis = "InnerBS";
 $produk1->penerbit = "pinkPanda";
 $produk1->harga = 99.000;

 $produk2 = new produk();
 $produk2->judul = "uncharted";
 $produk2->penuis = "Neil Druckman";
     ;
 $produk2->penerbit = "acer computer";
 $produk2->harga = 55.000;

 echo "komik : " . $produk1->getLabel();
 echo "<br>";
 echo "game : " . $produk2->getLabel();
