<?php 
session_start();

// création de partie ----------------------------------------------
if(!isset($_SESSION['compteur'])) { // compteur pour le match nul
    $_SESSION['compteur'] = 0;
} else {
    $_SESSION['compteur']++;
}

if(!isset($_SESSION['symbole'])) {
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
    $_SESSION['symbole'] = "X";
    $_SESSION['compteur'] = 0;
    header("Refresh:5");
    
}
// changements visuel des cases -------------------------------------

function changerSymbole($case) {
    
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

function affichage($case) {
    if(isset($_COOKIE[$case])) echo $_COOKIE[$case];
}
function desactiver($case) {
    if(isset($_COOKIE[$case])) echo "disabled";
}
// jeu -------------------------------------------------------------
function coup($case) {

    if ( isset($_POST[$case]) && $_POST[$case] == "") {
        changerSymbole($case);
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
    } else if ($_SESSION['compteur'] >= 18) { // double incrémentation dûe au header("Refresh:0")
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

<style>
    *, ::after,::before,body,html {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    body {
        text-align: center;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        letter-spacing: 1.8px;
        background-color: #f7d7a8;
    }
    td {
        border: 4px solid black;
        border-collapse: collapse;
        height: 100px;
        width: 100px;
    }
    table {
        margin: 2rem auto;
        border: 2px solid black;
        border-collapse: collapse;
        background-color: #f1ab32;
    }
     table button {
        width: 100%;
        height: 100%;
        font-size: 5em;
        text-align: center;
        background-color: #f1ab32;
        border: 0;
        
    }
    
    button[value="X"] {
        color: #421b42;
    }
    button[value="O"] {
        color: #df3025;
    }
    #reset {
        padding: 0.5em;
        font-size: 1.5em;
        border-radius: 0.3rem;
        border: none;
        font-family: serif;
        font-weight: 300;
        background: #f1ab32;
        color:#f9fcfd;


    }
    h1 {
        margin-top: 1rem;
        color: #421b42;
        font-size: 3em;
    }
    span {
        color:#df3025;
    }
    h2 {
        margin-top: 3rem;
        font-size: 3em;
    }
</style>