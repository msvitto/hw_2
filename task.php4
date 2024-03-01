<?php declare(strict_types=1);
//Given a list of integers, determine whether the sum of its elements is odd or even.
//Give your answer as a string matching "odd" or "even".
//If the input array is empty consider it as: [0] (array with a zero). return max($ages);
function odd_or_even(array $a): string {
return (array_sum($a))%2 == 0 ? "even" : "odd";
}
$a = [1,2,1];
echo odd_or_even($a);

//The two oldest ages function/method needs to be completed. It should take an array of numbers as its argument and return the two highest numbers within the array. The returned value should be an array in the format [second oldest age,  oldest age].
//The order of the numbers passed in could be any order. The array will always include at least 2 items. If there are two or more oldest age, then return both of them in array format.
function twoOldestAges(array $ages):array{
    rsort($ages);
    return [$ages[1], $ages[0]];
}
$ages = [20,10,2];
echo print_r(twoOldestAges($ages), true);

function highAndLow(string $numbers):string{
    $numberArray = array_map('intval',explode(' ', $numbers));
    $maxValue = max($numberArray);
    $minValue = min($numberArray);
    return  "$maxValue $minValue";
}
echo highAndLow("100 2 3 -40");