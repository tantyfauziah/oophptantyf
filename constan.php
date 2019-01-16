<?php  

// define ('Nama', 'Tanty Fauziah');
// echo Nama;

// echo "<br>";

// const Umur = 16;
// echo Umur;

// class Coba {
// const Nama = 'Tanty Fauziah';
//}

//echo Coba::Nama;

// echo __LINE__;

// echo __FILE__;

// function coba() {
// return __FUNCTION__;
//}

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;