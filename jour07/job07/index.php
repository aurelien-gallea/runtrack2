

<form action="index.php" method="get">
    <input type="text" name="str" id="str">
    <select name="fonction" id="fonction">
        <option value="gras">gras</option>
        <option value="cesar" selected>cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <button type="submit">Valider</button>
</form>

<?php

$alphabet = ["A","B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
$alphabetMin = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
$str= "";
if(isset($_GET['str']) == true) {
    $str = $_GET['str'];
}

function gras($str) {

    global $alphabet;
    
    if (isset($_GET['fonction']) && $_GET['str'] != null && $_GET['fonction'] == "gras") {
        
        foreach ($alphabet as $value) {
            if ($str[0] == $value) {
                $str = "<b> $str </B>";
                
            } 
        }
        return $str;
    }
    
    
}

function cesar($str, $decalage = 2) {
    global $alphabet, $alphabetMin;

    if (isset($_GET['fonction']) && $_GET['str'] != null && $_GET['fonction'] == "cesar") {
        
        for ($i=0; isset($str[$i]); $i++) { 
            for($j=0; isset($alphabetMin[$j]); $j++) {
                if($alphabetMin[$j]  == $str[$i]) {
                    
                echo $alphabetMin[($j + $decalage) % 26] ;

                }
            }  
        
        
            for($k=0; isset($alphabet[$k]); $k++) {
                if($alphabet[$k]  == $str[$i]) {
                    
                echo $alphabet[($k + $decalage) % 26] ;

                }
            }  
        }
    }
    
}

function plateforme($str) {
    if (isset($_GET['fonction']) && $_GET['str'] != null && $_GET['fonction'] == "plateforme") {
        if ($str[-1] == "e" && $str[-2] == "m") echo $str . "_";
    }
}

echo gras($str);
cesar($str, 2);
plateforme($str);

?>