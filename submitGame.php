<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gaming";
$game = $_POST["game"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name FROM games WHERE name='$game'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) != 0){
  echo "was result";
}
else{
  $sql = "INSERT INTO games (name) VALUES('$game' )";
  if($conn->query($sql)===TRUE){
    echo "Game added to database";
  }
  else echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
?>