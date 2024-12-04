<?php

namespace HexletBasics\Conditionals\ElseIfStatement;

// BEGIN (write your solution here)
function whoIsThisHouseToStarks($family)
{
    if ($family === 'Karstark' || $family == 'Tully') {
        return 'friend';
    } elseif ($family ==='Lannister' || $family == 'Frey') {
        return 'enemy';
    } else {
        return 'neutral';
    }
}

print_r(whoIsThisHouseToStarks('Karstark'));

print_r(whoIsThisHouseToStarks('Frey'));

print_r(whoIsThisHouseToStarks('Joar'));

print_r(whoIsThisHouseToStarks('Ivanov'));
// END