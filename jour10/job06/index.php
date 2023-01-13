<?php

//connexion à la bdd
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

// envoi de la requete
$request = $mysqli ->query('SELECT count(id)AS `nb_etudiants` FROM `etudiants`');

$nb_etudiants = $request ->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        th {

            border: 1px solid black;
        }
        td {
            border: 1px solid blue;
        }
    </style>
    <title>job06</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre d'étudiants</th>
                
            </tr>
        </thead>
        <tbody>
            <?php

                
                    echo "<tr><td>" . $nb_etudiants['nb_etudiants'] . "</td></tr>";
                    

            ?>
            
        </tbody>
    </table>
</body>
</html>