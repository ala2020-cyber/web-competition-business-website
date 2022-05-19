

<?php

if(isset($_POST["submit"])){

    $name=$_POST["name"];
    $password=$_POST["pwd"];
    

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($name, $password) != false) {
        header("Location: ../login.php?error=emptyInput");
        exit();
    }

    loginUser($con,$name, $password);
    
}
else {
    header("Location: ../login.php");
    exit();
}
