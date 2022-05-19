
<?php

if (isset($_POST["submit"])){
    // echo("every thing works fine !!");

    $name=$_POST["name"];
    $email=$_POST["email"];
    $username=$_POST["uid"];
    $password=$_POST["pwd"];
    $passwordrepeat=$_POST["pwdrepeat"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignUP($name, $email, $username,$password,$passwordrepeat) != false) {
        header("Location: ../signin.php?error=emptyInput");
        exit();
    }

    if(invalidUid($username) !== false) {
        header("Location: ../signin.php?error=invaliduid");
        exit();
    }

    if(invalidEmail($email) !== false) {
        header("Location: ../signin.php?error=invalidEmail");
        exit();
    }

    if(pwdMatch($password,$passwordrepeat)!== false){
        header("Location: ../signin.php?error=pwdmatch");
        exit();
    }

    if(userExist($con,$username,$email) !== false) {
        header("Location: ../signin.php?error=usertaken");
        exit();
    }

    createUser($con,$name,$email,$username,$password);

    
}
else {
    header("Location: ../signin.php");
    exit();
}