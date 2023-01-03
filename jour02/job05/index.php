<?php

for ($i=2; $i <=1000; $i++) { 
    $diviseur=0;
    for ($f=1; $f <= $i; $f++) { 
        
        if($i % $f == 0) {
            $diviseur++;
        
        }
    }
    if($diviseur == 2) {
        echo $i . "<br>";
    }
}