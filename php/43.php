<?php

namespace HexletBasics\DefineFunctions\DefaultArguments;

// BEGIN (write your solution here)

function getHiddenCard($number, $lastNumber=4)
{
    $card = substr($number, 12, 4);
    $star = str_repeat('*', $lastNumber);
    return ("$star$card");
}
print_r(getHiddenCard(2034399002125581));
// END