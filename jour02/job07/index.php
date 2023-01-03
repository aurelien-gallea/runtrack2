<?php

$hauteur = 20;
$ligne = "_";


for ($i = $hauteur; $i > 1; $i--) {
    if ($i == $hauteur) { ?>

        <span>/-\</span><br>

    <?php    } else {

        $espace = $hauteur - $i; ?>
        <span>/

            <?php do {
                echo $ligne;
                $espace--;
            } while ($espace >= 1)

            ?>
            \</span><br>

    <?php }
    }?>
    <span> /

    <?php do {
            echo $ligne;
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
        color: purple;
        background: purple;
        border-radius: 50rem;
        
    }
</style>