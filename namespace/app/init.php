<?php 


// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/komik.php';
// require_once 'Produk/game.php'
// require_once 'Produk/CetakInfoProduk.php';

spl_autoload_register(function($class) {
	$class = explode('\\', $class);
	$class = end($class);
		require_once __DIR__ .'/produk/' . $class . '.php';

} );

spl_autoload_register(function($class) {
	$class = explode('\\', $class);
	$class = end($class);
		require_once __DIR__ .'/service/' . $class . '.php';

} );







 ?>