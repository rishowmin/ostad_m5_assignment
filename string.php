<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $str) {
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $str);
    $reversed = strrev($str);
    
    echo "Original String: $str, Vowel Count: $vowelCount, Reversed String: $reversed\n";
}
