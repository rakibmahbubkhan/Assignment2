<?php
$strings = ["Hello", "World", "PHP", "Programming"];
foreach ($strings as $string) {
    $countVowel = preg_match_all('/[aeiou]/i', $string, $matches);
    $revString = strrev($string);
    echo "Original String: $string, Vowel Count: $countVowel, Reversed String: $revString\n";
}
?>
