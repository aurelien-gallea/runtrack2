<?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";

$dic = ["consonnes" => 0,
        "voyelles"  => 0 ];

$voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
$consonnes= ["B", "C", "D", "F", "G", "H", "J", "K", "L", "M", "N", "P", "Q", "R", "S", "T", "V", "W", "X", "Z","b", "c", "d", "f", "g", "h","j", "k", "l", "m", "n", "p", "q", "r", "s", "t","v", "w", "x", "z" ];
$i = 0;

while (isset($str[$i])) {
    
    foreach ($voyelles as $key => $value) {
        if($str[$i] == $voyelles[$key]) {
            $dic['voyelles'] +=1;
        }
    }
    foreach ($consonnes as $key => $value) {
        if($str[$i] == $consonnes[$key]) {
            $dic['consonnes'] += 1;
        }
    }
    $i++;
}

?>

<table>
    <thead>
        <tr>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $dic['consonnes']?> </td>
            <td><?php echo $dic['voyelles']?> </td>
            
        </tr>
    </tbody>
</table>

<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    table, tr, td, th {
        border-collapse: collapse;
        border: 1px solid black;
        padding: 1rem;
        text-align: center;
        
    }
    
</style>