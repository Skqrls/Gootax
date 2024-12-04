<?php

namespace HexletBasics\Logic\WeakTyping;

// BEGIN (write your solution here)
function isFalsy($x)
{
    return $x == false;
}
var_dump(isFalsy(false));

var_dump(isFalsy(0));

var_dump(isFalsy('help'));

var_dump(isFalsy(10));
// END