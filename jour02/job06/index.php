<?php

$largeur= 20;
$longueur = 10;

while($largeur <=5000) {?>
    <div style=" height: <?php echo $longueur ?>; width: <?php echo $largeur ?>; border: 1px solid; margin-bottom: 1rem;"></div>
     <?php  $largeur *= 2;
    
}
?>

