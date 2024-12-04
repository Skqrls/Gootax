<?php

namespace HexletBasics\Loops\SyntaxSugar;

// BEGIN (write your solution here)
function filterString($str, $char){
    $result = '';
    for($i = 0; $i < strlen($str); $i++){
        $result .= $str[$i] !== $char ? $str[$i] : '';
    }
    return $result;
}
// END