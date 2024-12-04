<?php

namespace HexletBasics\DeepIntoStrings\Unicode;

function invertCase($text)
{
    // BEGIN (write your solution here)
    $result = '';

    for ($i = 0; $i < mb_strlen($text); $i++) {
        $char = mb_substr($text, $i, 1);
        $result .= ($char === mb_strtoupper($char) ? mb_strtolower($char) : mb_strtoupper($char));
        }
        
    return $result;
    // END
}