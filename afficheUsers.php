<?php
  require_once './includes/dbh.inc.php';


  $sql="SELECT * from users;";
  $result=mysqli_query($con,$sql) or die("bad query");
   $count=0;

  echo " <h1>Table 'users' from the database 'fablabdb' : </h1>";
  echo "<table border='1'>";
  echo "<tr><td>usersId</td><td>usersName</td><td>usersEmail</td><td>usersUid</td><td>usersPwd</td><td>usersImage</td></tr>";
  
  while($row=mysqli_fetch_assoc($result)){
      echo "<tr><td>{$row['usersId']}</td><td>{$row['usersName']}</td><td>{$row['usersEmail']}</td><td>{$row['usersUid']}</td><td>{$row['usersPwd']}</td><td>{$row['usersImage']}</td></tr> \n";
      $count++;
    }
  echo "</table>";


  echo " <h2>>>>> we have $count users rigth now ! </h2>";

  

