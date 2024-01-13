<?php
require_once 'BangunDatar.php';
// Class untuk Lingkaran
class Lingkaran implements BangunDatar {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }

    public function circumference() {
        return 2 * pi() * $this->radius;
    }

    public function enlarge($scale) {
        $this->radius *= $scale;
    }

    public function shrink($scale) {
        $this->radius /= $scale;
    }
}