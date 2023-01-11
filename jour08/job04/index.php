

<?php

if(!empty($_POST['prenom'])) {
    
    setcookie("prenom", $_POST['prenom'], time()+3600);
    header("Refresh:0");
        
}

if(isset($_POST['deco'])) {
    setcookie("prenom", "", time()-3600);
    header("Refresh:0");
      
}

if(isset($_COOKIE['prenom'])) {
    echo '<h2> Bonjour ' . $_COOKIE['prenom'] . "</h2>";
    echo '<form action="index.php" method="post">
        <button type="submit" name="deco">Deconnexion</button>
        </form>';
} else {
    echo '<form action="index.php" method="post">
    <input type="text" name="prenom" id="prenom">
    <button type="submit" name="connexion">Connexion</button>
</form>';
}

?>
