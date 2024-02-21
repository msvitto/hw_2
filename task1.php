<?php
function makeNegative($num) {
   return -abs($num);
}
echo makeNegative(-8);

function boolToWord($bool){
   return $bool == true ? "Yes" : "No";
}
echo boolToWord(2);