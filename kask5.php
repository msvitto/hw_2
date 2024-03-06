<?php
//Simple, given a string of words, return the length of the shortest word(s).
//String will never be empty and you do not need to account for different data types.
// https://www.codewars.com/kata/57cebe1dc6fdc20c57000ac9/train/javascript


$str = "Hello my friends";
function findShort(string $str): int
{
    $arrayNew = array_map(function ($word) {
        return strlen($word);
    }, explode(' ', $str));

    return min($arrayNew);
}

//echo findShort($str);
//Take 2 strings s1 and s2 including only letters from a to z. Return a new sorted string, the longest possible, containing distinct letters - each taken only once - coming from s1 or s2.
//https://www.codewars.com/kata/5656b6906de340bd1b0000ac/train/php

$a = "ssa";
$b = "ss";
function longest(string $a, string $b): string
{
    $c = $a . $b;
    $uniqueChars = array_unique(str_split($c));
    sort($uniqueChars);

    return implode('', $uniqueChars);

}

//print_r(longest($a, $b));

//https://www.codewars.com/kata/554e4a2f232cdd87d9000038/train/php
//Deoxyribonucleic acid (DNA) is a chemical found in the nucleus of cells and carries the "instructions" for the development and functioning of living organisms.
//If you want to know more: http://en.wikipedia.org/wiki/DNA
//In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G". Your function receives one side of the DNA (string, except for Haskell);
// you need to return the other complementary side.
// DNA strand is never empty or there is no DNA at all (again, except for Haskell).
//More similar exercise are found here: http://rosalind.info/problems/list-view/ (source)
//Example: (input --> output)
//"ATTGC" --> "TAACG"
//"GTAT" --> "CATA"

$dna = 'ATTGC';
function DNA_strand(string $dna): string
{
    $replaceArray = array(
        'A' => 'T',
        'T' => 'A',
        'G' => 'C',
        'C' => 'G'
    );
    return strtoupper(strtr($dna, $replaceArray));
}

//echo DNA_strand($dna);

function DNA_strand1(string $dna):string
{
    $letters = [
        'A' => 'T',
        'T' => 'A',
        'G' => 'C',
        'C' => 'G'
    ];
    $arrayNew = array_map(function ($c) use ($letters){
        return $letters[$c];
    }, str_split($dna));

    return implode($arrayNew);
}
echo DNA_strand1('ATGAAC');