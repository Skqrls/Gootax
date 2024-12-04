<?php

namespace HexletBasics\Loops\IterationOverString;

// BEGIN (write your solution here)
function printReversedWordBySymbol($word)
{   
    $rev = strrev($word);
    $i = 0;

    while ( $i < strlen($word)) {
        print_r("$rev[$i]\n");
        $i = $i + 1;
    }
}
// END