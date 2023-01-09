<form method="post" action="index.php">
    <input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
    <input type="submit" value="envoyer">
</form>

<?php

if( isset($_POST['username'])|| isset($_POST['password'])){

    if ($_POST['username'] != "" || $_POST['password'] != ""){
        echo ( $_POST['username'] == "John" && $_POST['password'] == "Rambo") ? "<p>C'est pas ma guerre</p>" : "<p>Votre pire cauchemar</p>";
    }

}
?>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 2rem;
    } 
    input {
        font-size: 1.1em;
        border-radius: 0.3rem;
        padding: 0.5em;
        margin-left: 0.5rem;
    }
    p {
        font-size: 1.2em;
        font-weight: 700;
    }
</style>