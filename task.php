<?php
function multiply(int $a, int $b):int {
    return $a * $b;
}
function double(int $c, int $d):int{
    return multiply($c, $d)*2;
}
echo double(2,3);