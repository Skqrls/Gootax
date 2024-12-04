<?php

namespace HexletBasics\Loops\WhileLoop;

function printNumbers($firstNumber)
{
    // BEGIN (write your solution here)

        while ($firstNumber <= 4 && $firstNumber >= 1){
            print_r($firstNumber);
            print_r("\n");
            $firstNumber = $firstNumber - 1;
        }
        return print_r('finished!');
    // END
}