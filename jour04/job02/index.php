<form action="index.php">
    <input type="text" name="prenom" id="prenom" placeholder="Votre prénom">
    <input type="text" name="nom" id="name" placeholder="Votre nom">
    <input type="submit" value="envoyer">
</form>

<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>prenom</td>
            <td><?php if (isset($_GET['prenom'])) echo $_GET['prenom'] ?></td>
        </tr>
        <tr>
            <td>nom</td>
            <td><?php if (isset($_GET['nom'])) echo $_GET['nom'] ?></td>
        </tr>
    </tbody>
</table>

<?php

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