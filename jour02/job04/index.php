<?php
$a= 1;
do {
    
    if ($a %3 === 0 && $a %5 === 0) {
        echo "FizzBuzz";
    } else if ($a %3 === 0) {
        echo "Fizz";
    } else if ($a %5 === 0) {
        echo "Buzz";
    } else {
        echo $a;
    }
    
    $a++;
   echo "<br>";
} while ($a <= 100);