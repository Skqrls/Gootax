<?php

namespace HexletBasics\Loops\AgregationNumber;

// BEGIN (write your solution here)
function multiplyNumbersFromRange($start, $finish)
{
    $i = 0;
    $sum = 1;
    while($i <= ($finish - $start)){
        $sum = ($start + $i) * $sum;
        $i++;
    };
    return $sum;
}
// END
