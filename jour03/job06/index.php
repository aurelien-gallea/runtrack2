<?php

$str= "Les choses que l'on possede finissent par nous posseder.";
$count= 0;

while (isset($str[$count])) {
   $count++;
}


for ($count; $count >= 0; $count--) { 
      if  (isset($str[$count])) {
        echo $str[$count];
      };
}

