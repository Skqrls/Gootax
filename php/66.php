<?php

namespace HexletBasics\Loops\Mutators;

// BEGIN (write your solution here)
function makeItFunny($str, $n) {
    $result = '';
    $length = strlen($str);

    for ($i = 0; $i < $length; $i++) {
        
        if (($i + 1) % $n == 0) {
            
            $result .= strtoupper($str[$i]);
        } else {
           
            $result .= $str[$i];
        }
    }

    return $result;
}
// END