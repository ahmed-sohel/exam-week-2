<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $key => $string) {
  $vowels = substr_count($string, 'a') + substr_count($string, 'e') + substr_count($string, 'i') + substr_count($string, 'o') + substr_count($string, 'u');
  $reversed = strrev($string);
  echo "Original String: $string, Vowel Count: $vowels, Reversed String: $reversed \n"; 
}