<?php

$text = 'Never forget what you are, for surely the world will not';

// BEGIN (write your solution here)
// $word = substr($text, 0, 1);

$word = "First: {$text[0]}\nLast: {$text[-1]}";

print_r($word);
// END