<?php

// Interface untuk BangunDatar
interface BangunDatar {
    public function area();
    public function circumference();
    public function enlarge($scale);
    public function shrink($scale);
}