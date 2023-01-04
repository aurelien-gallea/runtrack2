<?php

$myArr = [200, 204, 173, 98, 171, 404, 459];

foreach ($myArr as $key => $value) {
    if($value %2==0) {
        echo "{$myArr[$key]} est paire<br>";
    }
    else {
        echo "{$myArr[$key]} est impaire<br>";

    }
}