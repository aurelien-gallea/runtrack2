<?php

//connexion à la bdd
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

// envoi de la requete
$request = $mysqli ->query('SELECT SUM(`superficie`) AS `superficie_totale` FROM `etages`');

// recupération de données
$result = $request->fetch_assoc();




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
    <title>job07</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Superficie totale</th>
                
            </tr>
        </thead>
        <tbody>
            <?php

                foreach ($request as $row) {
                    echo "<tr><td>" . $result['superficie_totale'] . "</td></tr>";
                }
            ?>
            
        </tbody>
    </table>
</body>
</html>