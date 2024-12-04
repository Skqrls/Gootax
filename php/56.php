<?php

namespace HexletBasics\Conditionals\SwitchStatement;

// BEGIN (write your solution here)
function getNumberExplanation ($number) 
{
    switch ($number) {
        case 666:
            return 'devil number';
        case 42:
            return 'answer for everything';
        case 7:
            return 'prime number';
        default:
            return 'just a number';
    }
}
echo getNumberExplanation(8);
echo getNumberExplanation(666);
echo getNumberExplanation(42); 
echo getNumberExplanation(7);  
// END