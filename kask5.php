<?php
//Simple, given a string of words, return the length of the shortest word(s).
//String will never be empty and you do not need to account for different data types.
// https://www.codewars.com/kata/57cebe1dc6fdc20c57000ac9/train/javascript


$str= "Hello my friends";
function findShort(string $str):int{
    $arrayFromString = explode(' ', $str);
    print_r($arrayFromString);
    $arrayNew = array();
    for ($i = 0; $i < count($arrayFromString); $i++) {
        $arrayNew[] = strlen($arrayFromString[$i]);
    }
    asort($arrayNew);
    $shortestLength = reset($arrayNew);
    return $shortestLength;
}
echo findShort($str);
//Take 2 strings s1 and s2 including only letters from a to z. Return a new sorted string, the longest possible, containing distinct letters - each taken only once - coming from s1 or s2.
//https://www.codewars.com/kata/5656b6906de340bd1b0000ac/train/php

$a="ssa";
$b="ss";
function longest($a, $b){
    $c= $a.$b;
    $uniqueChars=array_unique(str_split($c));
    sort($uniqueChars);
    return implode('', $uniqueChars);

}
print_r(longest($a,$b));