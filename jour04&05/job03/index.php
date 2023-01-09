<form method="post" action="index.php">
    <input type="text" name="prenom" id="prenom" placeholder="Votre prénom">
    <input type="text" name="nom" id="name" placeholder="Votre nom">
    <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo">
    <input type="submit" value="envoyer">
</form>

<?php
$count=0;
foreach ($_POST as $key => $value) if ($_POST[$key] !== "") $count++;
if ($count !== 0) echo "Le nombre d’argument POST envoyé est : $count ";
?>

<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 2rem;
    }
    
    table, td, th {
        font-size: 1.5em;
        padding: 1em;
        border-collapse: collapse;
        border: 2px solid black;
    }
    table{
        margin-top: 2rem;}

    input {
        font-size: 1.2em;
        border-radius: 0.3rem;
        padding: 0.5em;
        margin-left: 0.5rem;
    }
</style>