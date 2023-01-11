<?php

session_start();

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']= 1;
    echo "<h1> Le nombre de visiteurs est de : "  . $_SESSION['nbvisites'] . "</h1>";
    
} else {
    $_SESSION['nbvisites']++;
    echo "<h1> Le nombre de visiteurs est de : "  . $_SESSION['nbvisites'] . "</h1>";
    
}

if (isset($_POST['reset'])) {
  
        unset($_SESSION['nbvisites']);
        session_destroy();
        header("Refresh:0");
}

?>
<form action="index.php" method="post">
    <button type="submit" name="reset">reset</button>

</form>