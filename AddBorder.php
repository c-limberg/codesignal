//Given a rectangular matrix of characters, add a border of asterisks(*) to it.

<?php

function addBorder($picture) {
    foreach($picture as &$var){
        $var = str_pad($var,strlen($var)+2,"*",STR_PAD_BOTH);
    }

    $padding = str_repeat("*",strlen($picture[0]));

    array_push($picture,$padding);
    array_unshift($picture,$padding);
    
    return $picture;
}

?>
