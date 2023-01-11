
<form action="index.php" method="get">
    <input type="text" name="prenom" >
    <button type="submit" name="envoyer" value="envoyer">Envoyer</button>
    <button type="submit" name="reset" value="reset">Reset</button>
</form>

<?php

session_start();

echo "<br>";
if(isset($_GET['envoyer'])) {

    $_SESSION['prenom'][] = $_GET['prenom'];

    if (isset($_SESSION['prenom'])) {
        foreach ($_SESSION['prenom'] as $value) {
            echo $value . "<br>";
            
        }
    }
}

if (isset($_GET['reset'])) {
    unset($_SESSION['prenom']);
    session_destroy();
    echo "session terminé";
}


?>
