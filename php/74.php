<?php

namespace HexletBasics\Dates\Mkdtime;

// BEGIN (write your solution here)
function getHexletBirthday() {

    $HexletBirthday = '2012-01-01';

    $timestamp = strtotime($HexletBirthday);

    return $timestamp;
}
// END
