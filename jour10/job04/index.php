<?php

// connexion
$mysqli = new mysqli('localhost', 'root', '', 'jour09');

//requete
$request = $mysqli->query('SELECT * FROM `etudiants` WHERE LEFT(prenom,1) ="T"');

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
    <title>job04</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($request as $row) {
                echo "<tr><td>" . $row['prenom'] . "</td>";
                echo "<td>" . $row['nom'] . "</td>";
                echo "<td>" . $row['naissance'] . "</td>";
                echo "<td>" . $row['sexe'] . "</td>";
                echo "<td>" . $row['email'] . "</td></tr>";
            }

            ?>

        </tbody>
    </table>
</body>

</html>