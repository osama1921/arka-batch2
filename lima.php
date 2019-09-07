<?php

function count_vowels($string){
	$count = preg_match_all('/[aiueo]/i', $string, $matches);
	echo $count;
}
count_vowels("programmer");