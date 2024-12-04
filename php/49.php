<?php

namespace HexletBasics\Logic\LogicalNegation;

use function HexletBasics\Functions\mb_strrev;

// BEGIN (write your solution here)
function isPalindrome($word)
{
    $word2 = strtolower($word);
    return $word2 == strrev($word2);
}

function isNotPalindrome($word)
{
    return !isPalindrome($word);
}

// END