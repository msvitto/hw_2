<?php
function spacify(string $s): string {
    return implode(" ",str_split($s)) ;
}
echo spacify("aaa");