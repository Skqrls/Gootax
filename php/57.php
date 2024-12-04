<?php

namespace HexletBasics\Conditionals\Elvis;

// BEGIN (write your solution here)
function generateAmount($how, $price)
{
   $showHow = $how ?: $price * 3;
   return $showHow;
}
// END
