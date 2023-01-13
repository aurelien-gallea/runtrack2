<?php

//connexion à la bdd
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

// envoi de la requete
$request = $mysqli ->query('SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE `naissance` BETWEEN 19980101 AND 20180101');

// recupération de données
$result = $request->fetch_all();




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
    <title>job12</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                
            </tr>
        </thead>
        <tbody>
            <?php

                foreach ($request as $row) {
                    echo "<tr><td>" . $row['prenom'] . "</td>";
                    echo "<td>" . $row['nom'] . "</td>" ;
                    echo "<td>" . $row['naissance'] . "</td></tr>" ;
                }

            ?>
            
        </tbody>
    </table>
</body>
</html>