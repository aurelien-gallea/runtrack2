<?php

session_start();


if (!isset($_SESSION['nbvisites'])) {
    
    $_SESSION['nbvisites']= 0;
    echo "<h1> Le nombre de visiteurs est de : "  . $_SESSION['nbvisites'] . "</h1>";
    
} else {
    $_SESSION['nbvisites']++;
    echo "<h1> Le nombre de visiteurs est de : "  . $_SESSION['nbvisites'] . "</h1>";

}

if (isset($_GET['reset'])) {
    unset($_SESSION['nbvisites']); 
         
}

?>
<form action="index.php" method="get">
    <button type="submit" name="reset" >reset</button>

</form>