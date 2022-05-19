
<?php

function emptyInputSignUP($name, $email, $username,$password,$passwordrepeat)
{
  $result;
  if(empty($email) || empty($name) || empty($username) ||empty($password) || empty($passwordrepeat))
  {
      $result=true;
  }
  else {
      $result=false;
  }
  return $result;
}

function invalidUid($username)
{
  $result;
  if( ! preg_match("/^[a-zA-Z0-9]*$/",$username))
  {
      $result=true;
  }
  else {
      $result=false;
  }
  return $result;
}


function invalidEmail($email)
{
  $result;
  if( !filter_var($email,FILTER_VALIDATE_EMAIL))
  {
      $result=true;
  }
  else {
      $result=false;
  }
  return $result;
}

function pwdMatch($password,$passwordrepeat)
{
  $result;
  if( $password != $passwordrepeat)
  {
      $result=true;
  }
  else {
     $result=false;
  }
  return $result;
}

function userExist($con,$username, $email)
{
    $query="SELECT * FROM users WHERE usersUid= ? OR usersEmail= ?;";
    $stmt=mysqli_stmt_init($con);
    if( !mysqli_stmt_prepare($stmt,$query)){
        header("Location: ../signin.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username,$email);
    mysqli_stmt_execute($stmt);
    $resultData= mysqli_stmt_get_result($stmt);

    if($row= mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
         return false;
    }
    mysqli_stmt_close($stmt);

}



function createUser($con,$name,$email,$username,$password) 
{
    $query="INSERT INTO users (usersName, usersEmail,usersUid,usersPwd) VALUES ( ?, ?,?,?)";

    $stmt=mysqli_stmt_init($con);
    if( !mysqli_stmt_prepare($stmt,$query)){
        header("Location: ../signin.php?error=stmtfailed");
        exit();
    }
    $hashedpwd=password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name,$email,$username,$hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../signin.php?error=none");
    exit();
} 


//login functions


function emptyInputLogin($name, $password)
{
  $result;
  if(empty($name) || empty($password) )
  {
      $result=true;
  }
  else {
      $result=false;
  }
  return $result;
}


function loginUser($con,$name, $password){
  $uiexist=userExist($con,$name, $name);

  if($uiexist == false) {
      header("Location: ../login.php?error=wronglogin");
      exit();
  }

  $pwdhashed=$uiexist["usersPwd"];
  $checkpassword=password_verify($password,$pwdhashed);

  if($checkpassword == false) 
  {
    header("Location: ../login.php?error=wrongpassword");
    exit();
    
  }else {
      session_start();
      $_SESSION["userid"]=$uiexist["usersId"];
      $_SESSION["useruid"]=$uiexist["usersUid"];
      $_SESSION["username"]=$uiexist["usersName"];
      $_SESSION["useremail"]=$uiexist["usersEmail"];
      $_SESSION["userimage"]=$uiexist["usersImage"];
      header("Location: ../index.php");
      exit();

  }

}

