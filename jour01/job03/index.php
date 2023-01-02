<!DOCTYPE html>
<?php

$myBool = false;
$myInt = 6;
$myStr = "hello";
$myFloat = 5.5;


?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon tableau avec PHP</title>
</head>
<body style="font-size: 1.8em; display: flex; flex-direction:column; justify-content: center;">
<h1 style="text-align:center">Mon incroyable tableau en PHP</h1>
    <table style="border:1px solid black;border-collapse: collapse;margin:2rem;text-align:center;">
        <thead>
            <tr>
                <th style="padding: 0.3em; border-right:1px solid blue ">type</th>
                <th  style="padding: 0.3em;border-right:1px solid blue ">nom</th>
                <th style="padding: 0.3em;border-right:1px solid blue ">valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr style="border: 1px solid black;">
                <td style="padding: 0.3em;border-right:1px solid blue"> <?php echo gettype($myBool) ?> </td>
                <td style="padding: 0.3em;border-right:1px solid blue"> $myBool </td>
                <td style="padding: 0.3em;"> <?php echo ($myBool == 1) ? "true" : "false";  ?> </td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="padding: 0.3em;border-right:1px solid blue"> <?php echo gettype($myInt) ?> </td>
                <td style="padding: 0.3em;border-right:1px solid blue"> $myInt</td>
                <td style="padding: 0.3em;"> <?php echo $myInt ?></td>
            </tr>
            <tr style="border: 1px solid black;">
                <td style="padding: 0.3em;border-right:1px solid blue"> <?php echo gettype($myStr) ?> </td>
                <td style="padding: 0.3em;border-right:1px solid blue"> $myStr </td>
                <td style="padding: 0.3em;"><?php echo $myStr ?></td> 
            </tr>
            <tr style="border: 1px solid black;">
                <td style="padding: 0.3em;border-right:1px solid blue"> <?php echo gettype($myFloat) ?> </td>
                <td style="padding: 0.3em;border-right:1px solid blue"> $myFloat</td>
                <td style="padding: 0.3em;"> <?php echo $myFloat ?></td>
            </tr>
        </tbody>
        
    </table>
</body>
</html>