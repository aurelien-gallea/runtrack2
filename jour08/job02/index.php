<?php



setcookie("nbvisites", $_COOKIE["nbvisites"]+1 , time()+36000);



if (!isset($_COOKIE["nbvisites"])) {
    
    $_COOKIE["nbvisites"]= 0;
    
    echo "<h1> Le nombre de visiteurs est de : "  . $_COOKIE["nbvisites"] . "</h1>";
    
} else {
    $_COOKIE["nbvisites"]++;
    
    echo "<h1> Le nombre de visiteurs est de : "  . $_COOKIE["nbvisites"] . "</h1>";

}


if (isset($_GET['reset'])) {

    setcookie("nbvisites", "", time()-36000);      
    unset($_GET['reset']);  
       
}

?>
<form action="index.php" method="get">
    <button type="submit" name="reset" >reset</button>

</form>