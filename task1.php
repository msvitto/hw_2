<?php
function makeNegative(int $num ): int{
   return -abs($num);
}
echo makeNegative(-8);

function boolToWord(bool $b): string{
   return $b ? "Yes" : "No";
}
echo boolToWord(2);