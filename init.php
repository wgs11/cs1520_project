<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gaming";
$conn = new mysqli($servername,$username,$password, $dbname);
$sql = "CREATE TABLE users(name varchar(30), pass varchar(30))";
if ($conn->query($sql)===true){
  echo "User Table Created";
}
else{
    echo "error inserting ".$conn->error."<br/>";
}