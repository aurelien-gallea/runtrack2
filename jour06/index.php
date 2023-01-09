<?php

if ( isset($_POST["style"]) ) {
    
    switch ($_POST["style"]) {
        case 'style1':
            $style = "./style1.css";
            break;
        case 'style2':
            $style = "./style2.css";
            break;
        case 'style3':
            $style = "./style3.css";
            break;
        default:
            throw new Exception("Error Processing Request", 1);
            break;
    }

}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $style ?>">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <select name="style" id="style">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
            <option value="style3">style3</option>
        </select>
        <button type="submit">Valider le style</button>
    </form>
</body>
</html>

