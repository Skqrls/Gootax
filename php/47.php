<?php

namespace HexletBasics\Logic\CombineExpressions;

// BEGIN (write your solution here)
function isInternationalPhone($number)
{
    return $number[0] === '+';
}
var_dump(isInternationalPhone('89602223423'));

var_dump(isInternationalPhone('+79602223423'));
// END