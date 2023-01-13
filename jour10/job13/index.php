<?php

//connexion à la bdd
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

// envoi de la requete
$request = $mysqli ->query('SELECT `etages`.`nom` AS "etage", `salles`.`nom` FROM `salles` INNER JOIN `etages` ON `salles`.`id_etage`= `etages`.`id`');

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
    <title>job13</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Etages</th>
                <th>Nom</th>
                
            </tr>
        </thead>
        <tbody>
            <?php

                foreach ($request as  $value ) {
                    echo "<tr><td>" . $value['etage'] . "</td>";
                    echo "<td>" . $value['nom']. "</td></tr>" ;
                }

            ?>
            
        </tbody>
    </table>
</body>
</html>