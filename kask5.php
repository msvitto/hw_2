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


