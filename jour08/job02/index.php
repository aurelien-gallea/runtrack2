<?php

if (!isset($_COOKIE["nbvisites"])) {
    
    $_COOKIE["nbvisites"]= 1;
    setcookie("nbvisites", 1 , time()+36000);
    var_dump($_COOKIE["nbvisites"]);
    echo "<h1> Le nombre de visiteurs est de : "  . $_COOKIE["nbvisites"] . "</h1>";
    
} else {
    $_COOKIE["nbvisites"]++;
    setcookie("nbvisites", $_COOKIE["nbvisites"] , time()+36000);
    
    echo "<h1> Le nombre de visiteurs est de : "  . $_COOKIE["nbvisites"] . "</h1>";

}

if (isset($_POST['reset'])) {

    setcookie("nbvisites", "", time()-36000);      
    unset($_POST['reset']);  
    header("Refresh:0");  
}

?>
<form action="index.php" method="POST">
    <button type="submit" name="reset" >reset</button>

</form>