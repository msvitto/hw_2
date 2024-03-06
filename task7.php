<?php
//Area of an arrow
//An arrow is formed in a rectangle with sides a and b by joining the bottom corners to the midpoint of the top edge and the centre of the rectangle.
//arrow a and b are integers and > 0
//Write a function which returns the area of the arrow.

//https://www.codewars.com/kata/589478160c0f8a40870000bc/train/php

function arrow_area(int $a, int $b): int
{
    return 0.5 * $a * (0.5 * $b);
}

//echo arrow_area(2, 4);

//https://www.codewars.com/kata/59706036f6e5d1e22d000016/train/php
//If　a = 1, b = 2, c = 3 ... z = 26
//Then l + o + v + e = 54 and f + r + i + e + n + d + s + h + i + p = 108
//So friendship is twice as strong as love :-)
//Your task is to write a function which calculates the value of a word based off the sum of the alphabet positions of its characters.
//The input will always be made of only lowercase letters and will never be empty.

function wordsToMarks(string $str): int
{
    $alphabet = [
        'A' => 1,
        'B' => 2,
        'C' => 3,
        'D' => 4,
        'E' => 5,
        'F' => 6,
        'G' => 7,
        'H' => 8,
        'I' => 9,
        'J' => 10,
        'K' => 11,
        'L' => 12,
        'M' => 13,
        'N' => 14,
        'O' => 15,
        'P' => 16,
        'Q' => 17,
        'R' => 18,
        'S' => 19,
        'T' => 20,
        'U' => 21,
        'V' => 22,
        'W' => 23,
        'X' => 24,
        'Y' => 25,
        'Z' => 26
    ];

    $sum = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        $sum += $alphabet[$char];
    }

    return $sum;
}

echo wordsToMarks("ADA");

