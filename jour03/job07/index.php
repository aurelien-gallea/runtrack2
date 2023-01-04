<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newStr = "";
for($i= 0; isset($str[$i]) == true; $i++ ) (isset($str[$i+1]) == true) ? ($newStr[$i] = $str[$i+1]) : ($newStr[$i] = $str[0]);
echo $newStr;
