<?php

namespace HexletBasics\Loops\ReturnFromLoop;

// BEGIN (write your solution here)
function hasChar($str, $char) {

    $length = strlen($str);
    $i = 0;

    while ($i < $length) {
        if ($str[$i] === $char) {
            return true;
        }
        $i++;
    }
    return false;
}
// END
