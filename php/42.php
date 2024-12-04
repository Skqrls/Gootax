<?php

namespace HexletBasics\DefineFunctions\Parameters;

// BEGIN (write your solution here)
function truncate($str, $length)
{
    $gameOfThrone = substr($str, 0, $length);
    return "{$gameOfThrone}...";

}
// END
