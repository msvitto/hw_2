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

echo arrow_area(2, 4);