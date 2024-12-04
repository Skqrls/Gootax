<?php

namespace HexletBasics\Loops\AgregationString;

// BEGIN (write your solution here)
function joinNumbersFromRange($number, $lenght)
{
    $result = '';
    $i = $number;

    while($i <= $lenght){
        $i = $i + 1;
        $result = $result . ($i - 1);
        
    }
    return $result;
}
// END
