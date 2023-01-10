<?php

function calcul($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
            break;
        case '-':
            return $a - $b;
            break;
        case '*':
            return $a * $b;
            break;
        case '/':
            return $a / $b;
            break;
        case '%':
            return $a % $b;
            break;
        default:
            echo 'un problème est survenue';
            break;
    }
    
}

echo calcul(3, "*", 5);