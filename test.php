<?php
//function  even_or_odd(int $n): string
//{
//  if ($n % 2 == 0){
//      return "Even";
//  }  else {
//      return "Odd";
//  }
//}
//echo even_or_odd(n:7);

function even_or_odd($n){
    return ($n % 2==0) ? "Even" : "Odd";
}
echo even_or_odd(2);
