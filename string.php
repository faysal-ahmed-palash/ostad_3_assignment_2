<?php
// given strings from ostad question
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // vowels Finding
    $vowelCount = preg_match_all('/[aeiou]/i', $string, $matches);
    
    // ulta korbo
    $ultaString = strrev($string);
    
// Final output
    echo "<br>Original String: $string, Vowel Count: $vowelCount, Reversed String: $ultaString";
}
?>
