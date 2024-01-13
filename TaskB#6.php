<?php

function myFuct($num)
{
    for ($i=1; $i <= $num; $i++) { 
        if ($i % 3 == 0 && $i % 5 == 0) {
            $p = $i / 3;
            $l = $i / 5;
            $recArea = rectangleArea($p, $l);
            echo number_format($recArea, 2). "\n";
        } elseif ($i % 3 == 0) {
            $r = $i / 3;
            $cirArea = circleArea($r);
            echo number_format($cirArea, 2) . "\n";
        } elseif ($i % 5 == 0) {
            $r = $i / 5;
            $cirFer = circumference($r);
            echo number_format($cirFer, 2) . "\n";
        } else {
            echo number_format($i, 2) . "\n";
        }
    }
}

function circleArea($r)
{
    return 3.14 * $r * $r;
}

function circumference($r)
{
    return 2 * 3.14 * $r;
}

function rectangleArea($p, $l)
{
    return $p * $l;
}

$result = myFuct(100);
echo $result;
