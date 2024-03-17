<?php
function divisors($n)
{
    $count = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i === 0 && $i !== 0) {
            $count++;
        };
    }
    return $count;
}

//print_r(divisors(3));


//https://www.codewars.com/kata/59377c53e66267c8f6000027/train/php
//Introduction
//There is a war and nobody knows - the alphabet war!
//There are two groups of hostile letters. The tension between left side letters and right side letters was too high and the war began.
//
//Task
//Write a function that accepts fight string consists of only small letters and return who wins the fight. When the left side wins return Left side wins!, when the right side wins return Right side wins!, in other case return Let's fight again!.
//
//The left side letters and their power:
//
// w - 4
// p - 3
// b - 2
// s - 1
//The right side letters and their power:
//
// m - 4
// q - 3
// d - 2
// z - 1
//The other letters don't have power and are only victims.
function alphabetWar(string $fight): string
{
    $left_side = [
        "w" => 4,
        "p" => 3,
        "b" => 2,
        "s" => 1
    ];
    $right_side = [
        "m" => 4,
        "q" => 3,
        "d" => 2,
        "z" => 1
    ];
    $result_1 = 0;
    $result_2 = 0;

    for ($i = 0; $i < strlen($fight); $i++) {
        if (array_key_exists($fight[$i], $left_side)) {
            $result_1 += $left_side[$fight[$i]];
        }

    }
    for ($j = 0; $j < strlen($fight); $j++) {
        if (array_key_exists($fight[$j], $right_side)) {
            $result_2 += $right_side[$fight[$j]];
        }

    }
    if ($result_1 > $result_2) {
        return "Left side wins!";
    } else if ($result_2 > $result_1) {
        return "Right side wins!";
    } else {
        return "Let's fight again!";
    }

}

;
echo alphabetWar("wmm");