<?php

function leetSpeak($str) {
    $motCode = "";
    for ($i=0; isset($str[$i]); $i++) { 
        switch ($str[$i]) {
            case 'A':
            case 'a':
                $motCode .= 4;
                break;
            case "B":
            case "b":
                $motCode .= 8;
                break;
            case "E":
            case "e":
                $motCode .= 3;
                break;
            case "G":
            case "g":
                $motCode .= 6;
            case 'L':
            case 'l':
                $motCode .= 1;
                break;
            case 'S':
            case 's':
                $motCode .= 5;
                break;
            case 'T':
            case 't':
                $motCode .= 7;
                break;
            default:
                $motCode .= $str[$i];
                break;
        }
    }
    return $motCode;
}

echo leetSpeak("aurevoir");