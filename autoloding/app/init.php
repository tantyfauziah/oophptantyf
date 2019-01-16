<?php  


//.require_once.'Produk/InfoProduk.php';
// requeri_once 'Produk/produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/game.php';
// require_once 'Produk/CetakInfoProduk.php';

spl_autoload_register(function($class) {
	require_once __DIR__ .'/produk/' . $class . '.php';

} );
