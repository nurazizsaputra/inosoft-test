<?php

require_once 'BangunDatar.php';
// Class untuk Persegi Panjang
class PersegiPanjang implements BangunDatar {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this->length * $this->width;
    }

    public function circumference() {
        return 2 * ($this->length + $this->width);
    }

    public function enlarge($scale) {
        $this->length *= $scale;
        $this->width *= $scale;
    }

    public function shrink($scale) {
        $this->length /= $scale;
        $this->width /= $scale;
    }
}