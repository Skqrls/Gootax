<?php

namespace HexletBasics\Conditionals\IfStatement;

// BEGIN (write your solution here)
function guessNumber($x)
{
    if ($x == '42') {
        return 'You win!';
    }
    return 'Try again!';
}
print_r(guessNumber('42'));

print_r(guessNumber('61'));
// END