<?php 

class produk {
	public $judul,
	       $penulis,
	       $penerbit,
	       $harga,
	       $jmlHalaman,
	       $waktuMain;


	public function __construct($judul = "judul", $penulis = "penilis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;

	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
}


class komik extends produk {
	public function getInfoProduk() {
		$str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}


class game extends produk {
	public function getInfoProduk() {
		$str = "game : {$this->judul} | {$this->getLabel()} (Rp.  {$this->harga}) ~ {$this->waktuMain} jam.";
		return $str;
	}
}


class CetakInfoProduk {
	public function cetak ( produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp.  {$produk->harga})";
		return $str;
	}
}


$produk1 = new komik("kungfu panda","InnerBS","pinkPanda", 99000, 275, 0);
$produk2 = new game("uncharted","Neil Duckman","acer computer", 55000, 0, 45);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();




