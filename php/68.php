<?php

namespace HexletBasics\Loops\ForLoop;

// BEGIN (write your solution here)
function sumOfSeries ($start, $finish)
{
    $sum = 0;

    for ($i = $start; $i <= $finish; $i++){
        $sum += $i;
    }
    return $sum;
}
// END
