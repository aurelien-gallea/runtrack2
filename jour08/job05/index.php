<?php 
session_start();

// création de partie ----------------------------------------------
if(!isset($_COOKIE['count'])) { // compteur pour le match nul
    setcookie('count', 0, time()+36000);
} 
if(!isset($_SESSION['symbole'])) { // création du symbole
    $_SESSION['symbole'] = "X";   
}
if (isset($_POST['reset'])) { // réinitialisation de partie avec le bouton
    reinitialisation();
}

function reinitialisation() {
    foreach($_COOKIE as $cookie_name => $cookie_value){
        unset($_COOKIE[$cookie_name]);
        setcookie($cookie_name, '', time() - 36000);
    }
    setcookie('count', 0, time()+36000);
    $_SESSION['symbole'] = "X";
    header("Refresh:5");  
}
// changements visuel des cases -------------------------------------

function changerSymbole($case) { // on change le symbole à chaque coup
    
    if ($_SESSION['symbole'] == 'X') {

        setcookie($case, $_SESSION['symbole'], time()+36000);
        $_SESSION['symbole'] = "O";
        header("Refresh:0");
        
    } else {
        setcookie($case, $_SESSION['symbole'], time()+36000);
        $_SESSION['symbole'] = "X";
        header("Refresh:0");   
    }
}

function affichage($case) { // on affiche dans la case le symbole
    if(isset($_COOKIE[$case])) echo $_COOKIE[$case];
}
function desactiver($case) { // on desactive le bouton pour eviter un incrémentation
    if(isset($_COOKIE[$case])) echo "disabled";
}
// jeu -------------------------------------------------------------
function coup($case) {

    if ( isset($_POST[$case]) && $_POST[$case] == "") {
        changerSymbole($case);
        if(isset($_COOKIE['count'])) {
            setcookie('count', $_COOKIE['count']+1, time()+36000);

        }
    }
}

coup('a1');
coup('a2');
coup('a3');
coup('b1');
coup('b2');
coup('b3');
coup('c1');
coup('c2');
coup('c3');

// conditions de fin de partie ----------------------------------

function croixGagne() {
    
    if((isset($_COOKIE['a1']) && $_COOKIE['a1']== "X" && isset($_COOKIE['a2']) && $_COOKIE['a2'] == "X" && isset($_COOKIE['a3']) && $_COOKIE['a3']== "X")
    || (isset($_COOKIE['b1']) && $_COOKIE['b1']== "X" && isset($_COOKIE['b2']) && $_COOKIE['b2'] == "X" && isset($_COOKIE['b3']) && $_COOKIE['b3']== "X") 
    || (isset($_COOKIE['c1']) && $_COOKIE['c1']== "X" && isset($_COOKIE['c2']) && $_COOKIE['c2'] == "X" && isset($_COOKIE['c3']) && $_COOKIE['c3']== "X")
    || (isset($_COOKIE['a1']) && $_COOKIE['a1']== "X" && isset($_COOKIE['b1']) && $_COOKIE['b1'] == "X" && isset($_COOKIE['c1']) && $_COOKIE['c1']== "X")
    || (isset($_COOKIE['a2']) && $_COOKIE['a2']== "X" && isset($_COOKIE['b2']) && $_COOKIE['b2'] == "X" && isset($_COOKIE['c2']) && $_COOKIE['c2']== "X")
    || (isset($_COOKIE['a3']) && $_COOKIE['a3']== "X" && isset($_COOKIE['b3']) && $_COOKIE['b3'] == "X" && isset($_COOKIE['c3']) && $_COOKIE['c3']== "X")
    || (isset($_COOKIE['a1']) && $_COOKIE['a1']== "X" && isset($_COOKIE['b2']) && $_COOKIE['b2'] == "X" && isset($_COOKIE['c3']) && $_COOKIE['c3']== "X")
    || (isset($_COOKIE['a3']) && $_COOKIE['a3']== "X" && isset($_COOKIE['b2']) && $_COOKIE['b2'] == "X" && isset($_COOKIE['c1']) && $_COOKIE['c1']== "X") ) {
        return 1;
    }
}
function rondGagne() {
    if((isset($_COOKIE['a1']) && $_COOKIE['a1']== "O" && isset($_COOKIE['a2']) && $_COOKIE['a2'] == "O" && isset($_COOKIE['a3']) && $_COOKIE['a3']== "O")
    || (isset($_COOKIE['b1']) && $_COOKIE['b1']== "O" && isset($_COOKIE['b2']) && $_COOKIE['b2'] == "O" && isset($_COOKIE['b3']) && $_COOKIE['b3']== "O") 
    || (isset($_COOKIE['c1']) && $_COOKIE['c1']== "O" && isset($_COOKIE['c2']) && $_COOKIE['c2'] == "O" && isset($_COOKIE['c3']) && $_COOKIE['c3']== "O")
    || (isset($_COOKIE['a1']) && $_COOKIE['a1']== "O" && isset($_COOKIE['b1']) && $_COOKIE['b1'] == "O" && isset($_COOKIE['c1']) && $_COOKIE['c1']== "O")
    || (isset($_COOKIE['a2']) && $_COOKIE['a2']== "O" && isset($_COOKIE['b2']) && $_COOKIE['b2'] == "O" && isset($_COOKIE['c2']) && $_COOKIE['c2']== "O")
    || (isset($_COOKIE['a3']) && $_COOKIE['a3']== "O" && isset($_COOKIE['b3']) && $_COOKIE['b3'] == "O" && isset($_COOKIE['c3']) && $_COOKIE['c3']== "O")
    || (isset($_COOKIE['a1']) && $_COOKIE['a1']== "O" && isset($_COOKIE['b2']) && $_COOKIE['b2'] == "O" && isset($_COOKIE['c3']) && $_COOKIE['c3']== "O")
    || (isset($_COOKIE['a3']) && $_COOKIE['a3']== "O" && isset($_COOKIE['b2']) && $_COOKIE['b2'] == "O" && isset($_COOKIE['c1']) && $_COOKIE['c1']== "O") ) {
        return 1;
    }
}
function finDePartie() {
    if (croixGagne() == 1) {
        reinitialisation();
        echo "X a gagné !";
    } else if( rondGagne() == 1) {
        reinitialisation();
        echo "O a gagné !";
    } else if (isset($_COOKIE['count']) && $_COOKIE['count'] == 9) { // match nul
        reinitialisation();
        echo "Match Nul !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Le morpion</title>
</head>
<body>
    <h1>Le M<span>o</span>rpi<span>o</span>n</h1>
<form action="index.php" method="post">
    
    <table>
        <tr>
            <td><button type="submit" <?php desactiver('a1') ?> name="a1" value="<?php affichage('a1') ?>"><?php affichage('a1') ?></button></td>
            <td><button type="submit" <?php desactiver('a2') ?> name="a2" value="<?php affichage('a2') ?>"><?php affichage('a2') ?></button></td>
            <td><button type="submit" <?php desactiver('a3') ?> name="a3" value="<?php affichage('a3') ?>"><?php affichage('a3') ?></button></td>
        </tr>
        <tr>
            <td><button type="submit" <?php desactiver('b1') ?> name="b1" value="<?php affichage('b1') ?>"><?php affichage('b1') ?></button></td>
            <td><button type="submit" <?php desactiver('b2') ?> name="b2" value="<?php affichage('b2') ?>"><?php affichage('b2') ?></button></td>
            <td><button type="submit" <?php desactiver('b3') ?> name="b3" value="<?php affichage('b3') ?>"><?php affichage('b3') ?></button></td>
        </tr><tr>
            <td><button type="submit" <?php desactiver('c1') ?> name="c1" value="<?php affichage('c1') ?>"><?php affichage('c1') ?></button></td>
            <td><button type="submit" <?php desactiver('c2') ?> name="c2" value="<?php affichage('c2') ?>"><?php affichage('c2') ?></button></td>
            <td><button type="submit" <?php desactiver('c3') ?> name="c3" value="<?php affichage('c3') ?>"><?php affichage('c3') ?></button></td>
        </tr>
    </table>
    <button type="submit" name="reset" id="reset">Réinitialiser la partie</button>
</form>
<h2><?php finDePartie() ?></h2>
</body>
</html>
