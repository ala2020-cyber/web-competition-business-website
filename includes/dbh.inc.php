<?php

$serverName= "localhost";

$dbUsername="root";

$dbPassword="";

$dbName="fablabdb";

$con= mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$con) {
    die("Connection failed: ". msqli_connect_error());
}