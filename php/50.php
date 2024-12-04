<?php

namespace HexletBasics\Logic\LogicalOperators2;

// BEGIN (write your solution here)
function isNeutralSoldier($x, $y)
{
    return $x !== 'red' && $y == 'black';
}
var_dump(isNeutralSoldier('yellow', 'black'));

var_dump(isNeutralSoldier('red', 'black'));

var_dump(isNeutralSoldier('red', 'red'));
// END