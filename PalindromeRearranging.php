<?php

//Given a string, find out if its characters can be rearranged to form a palindrome.

function palindromeRearranging($inputString) {
    foreach(count_chars($inputString,1) as $cnt)
        if($cnt%2!=0) $odd++;
    
    return $odd<=1;
}
?>
