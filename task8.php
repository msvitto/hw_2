<?php

<?php


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

//https://www.codewars.com/kata/542c0f198e077084c0000c2e/train/php
//Count the number of divisors of a positive integer n.
//
//Random tests go up to n = 500000.
//
//Examples (input --> output)
//4 --> 3 // we have 3 divisors - 1, 2 and 4
//5 --> 2 // we have 2 divisors - 1 and 5
//12 --> 6 // we have 6 divisors - 1, 2, 3, 4, 6 and 12
//30 --> 8 // we have 8 divisors - 1, 2, 3, 5, 6, 10, 15 and 30
//Note you should only return a number, the count of divisors. The numbers between parentheses are shown only for you to see which numbers are counted in each case.
function divisors(int $n): int
{
    $result = 0;
    $a = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i === 0) {
            $a[] = $i;

        }
    }
    return $result = count($a);

}

;
echo divisors(4);


echo "<br>";
//https://www.codewars.com/kata/57873ab5e55533a2890000c7/train/php
//A new task for you!
//
//You have to create a method, that corrects a given time string.
//There was a problem in addition, so many of the time strings are broken.
//Time is formatted using the 24-hour clock, so from 00:00:00 to 23:59:59.
//Examples
//"09:10:01" -> "09:10:01"
//"11:70:10" -> "12:10:10"
//"19:99:99" -> "20:40:39"
//"24:01:01" -> "00:01:01"
//If the input-string is null or empty return exactly this value! (empty string for C++) If the time-string-format is invalid, return null. (empty string for C++)
//
//Have fun coding it and please don't forget to vote and rank this kata! :-)
//
//I have created other katas. Have a look if you like coding and challenges.
function timeCorrect(string $timestring): string
{
    $timestringArray = explode(":", $timestring);
    $hours = $timestringArray[0];
    $minutes = $timestringArray[1];
    $seconds = $timestringArray[2];


    $minutes += floor($seconds / 60);
    $seconds %= 60;

    $hours += floor($minutes / 60);
    $minutes %= 60;

    $hours %= 24;


    $result = [$hours, $minutes, $seconds];
    for ($i = 0; $i < 3; $i++) {
        if (strlen((string)$result[$i]) <= 1) {
            $result[$i] = '0' . $result[$i];
        }
    }
    return implode(':', $result);
}

echo timeCorrect('08:12:01');