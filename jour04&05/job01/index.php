
<form method="get" action="index.php">
<input type="text" name="username" placeholder="Entrez votre pseudo">
<input type="text" name="name" placeholder="Votre nom">
<input type="text" name="surname" placeholder="Votre prénom">
<input type="submit" value="Envoyer">

</form>

<?php
$count=0;
foreach ($_GET as $key => $value) if ($_GET[$key] !== '') $count++;
if ($count !== 0) echo "Le nombre d’argument GET envoyé est :  $count";
?>
