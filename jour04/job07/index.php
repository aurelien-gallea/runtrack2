<form method="get" action="index.php">
    <div>
        <label for="largeur">Largeur</label>
        <input type="text" name="largeur" id="largeur">
    </div>
    <div>
        <label for="hauteur">hauteur</label>
        <input type="text" name="hauteur" id="hauteur">
    </div>
    <div>
        <button type="submit">Dessiner</button>
    </div>
</form>

<?php


$ajout = "_";
$ajoutFinal;
if (isset($_GET['largeur']) || isset($_get['hauteur'])) {

    if ((int)$_GET['largeur'] != 0 && (int)$_GET['hauteur'] != 0) {
        
        echo "<div>/\</div>";
        
        for ($a=2; $a <= $_GET['hauteur']; $a++) { // triangle
            
            echo "<div>/";
            
            for ($i=2; $i <= $_GET['largeur']; $i++) { 
                $ajout = $ajout . "_";
                echo $ajout;
                
                
                
            }
            $ajoutFinal = $ajout;
            echo "\</div>";
        }

        

        for ($a = $_GET['hauteur']; $a>=1; $a--) { // rectangle
            
            echo "<div>|";

            for($i= $_GET['largeur']; $i>=2; $i--) {
                $ajoutFinal = $ajout . "_";
                echo $ajoutFinal;
            }
            echo "|</div>";
        }

    }
}

?>

<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form{
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        width: 90%;
        margin: 2rem auto;
        background-color: orange;
        padding: 1rem;
        gap: 0.5rem;
        border-radius: 0.5rem;
        font-size: 1.2em;
    }
    input, button {
        border-radius: 0.3rem;
        padding: 0.5rem;
    }
    button:hover {
        opacity: 0.8;
    }
</style>