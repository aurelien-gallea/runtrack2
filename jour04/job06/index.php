<form action="index.php" method="get">
    <input type="text" name="nombre" id="nombre">
    <button type="submit">Envoyer</button>
</form>

<?php
if (isset($_GET['nombre']) == true && (int)$_GET['nombre'] != 0) {
    echo ( $_GET['nombre'] %2 == 0) ? "<h1>Nombre pair</h1> " : "<h1>Nombre impair</h1>";
}

?>


