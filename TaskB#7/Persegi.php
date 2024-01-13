<?php
require_once 'BangunDatar.php';
// Class untuk Persegi
class Persegi implements BangunDatar {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function area() {
        return pow($this->side, 2);
    }

    public function circumference() {
        return 4 * $this->side;
    }

    public function enlarge($scale) {
        $this->side *= $scale;
    }

    public function shrink($scale) {
        $this->side /= $scale;
    }
}