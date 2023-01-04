<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$i=0;

while (isset($str[$i])) {
    if (isset($str[$i+1])) {
        echo $str[$i+1];

    } else {
        echo $str[0];
    }
    $i++;
}