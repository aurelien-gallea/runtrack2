<?php

$hauteur = 5;
$ligne = "&nbsp &nbsp ";
$base= "_ ";

for ($i = $hauteur; $i > 1; $i--) {
    if ($i == $hauteur) { ?>

        <span>/ \</span><br>

    <?php 
    } else {

        $espace = $hauteur - $i; ?>
        <span>/

        <?php do {
            echo $ligne;
            $espace--;
        } while ($espace >= 1)

        ?>
        \</span><br>

    <?php
    }
} ?>

<span> /

<?php do {
        echo $base;
        $hauteur--;
    } while ($hauteur >= 1);
    ?>\ </span>


<!--  un peu de style  -->
<style>
    body {
        text-align: center;
        margin-top: 5rem;
        
    }
   span {
        /* background-color: purple; */
       
   }
    
</style>