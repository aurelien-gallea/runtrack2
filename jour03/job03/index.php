<?php

$str= "I\'m sorry Dave I\'m afraid I can\'t do that";
$i=0;
$voyelles = ["a","e","i","o","u","A","E","I","O","U", "y", ];

while (isset($str[$i])) {
    foreach ($voyelles as $key => $value) {
       if($str[$i] == $voyelles[$key] ){
        echo $str[$i];
        } 
    }
    $i++;
}