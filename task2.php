<?php
function getMiddle($test)
{
    $length = strlen($test) ;
    if ($length % 2 == 0){
        return substr($test,($length/2)-1,2);
    } else {
        return $test[$length/2];
    }

}

echo getMiddle('Saaawlly');