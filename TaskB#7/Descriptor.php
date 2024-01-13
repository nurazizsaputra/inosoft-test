<?php


require_once 'Lingkaran.php';
require_once 'Persegi.php';   
require_once 'PersegiPanjang.php'; 


// Class untuk Descriptor
class Descriptor {
    public static function describe($shape) {
        $shapeType = get_class($shape);
        $area = $shape->area();
        $circumference = $shape->circumference();

        echo "Bangun datar ini adalah $shapeType yang memiliki luas $area dan keliling $circumference\n";
    }
}

// Contoh penggunaan
$lingkaran = new Lingkaran(5);
$persegi = new Persegi(6);
$persegiPanjang = new PersegiPanjang(4, 8);

Descriptor::describe($lingkaran);
Descriptor::describe($persegi);
Descriptor::describe($persegiPanjang);

?>
