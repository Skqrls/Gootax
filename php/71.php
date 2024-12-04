<?php

namespace HexletBasics\DeepIntoStrings\StartWith;

function startsWith($text, $substr)
{
    // BEGIN (write your solution here)
    return mb_substr($text, 0, mb_strlen($substr)) === $substr;
    // END
}