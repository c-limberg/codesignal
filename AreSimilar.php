<?php

/*Two arrays are called similar if one can be obtained from another by swapping at most one pair of elements in one of the arrays.
Given two arrays a and b, check whether they are similar.*/

function areSimilar($a, $b) {
    if($a==$b) return true;
    
    if(sizeof($a)!=sizeof($b)||array_sum($a)!=array_sum($b)) return false;
    
    $index1 = 0; $index2 = 0; $diff = 0;
    
    foreach($a as $key=>$var){
        if($var!=$b[$key]){
            $diff++;
            if($diff==1)
                $index1 = $key;
            else if($diff==2)
                $index2 = $key;
        }
    }
    
    return ($diff==2&&$a[$index1]==$b[$index2]&&$a[$index2]==$b[$index1]);
}

?>
