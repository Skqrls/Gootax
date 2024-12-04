<?php

namespace HexletBasics\Loops\EdgeCases;

// BEGIN
function isArgumentsForSubstrCorrect($str, $index, $length)
{
    if($length < 0 || $index < 0 || $index >= strlen($str) || $length + $index > strlen($str))
    {
    return false;
    }
    return true;
}

$str = 'Sansa Stark';

echo isArgumentsForSubstrCorrect($str,-2, 8);
// END