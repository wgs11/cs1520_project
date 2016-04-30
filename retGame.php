<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gaming";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
$letter = $_POST["letter"];
$sql = "SELECT name FROM games WHERE name LIKE '$letter%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
   $get = "<ul>";
  while($row = mysqli_fetch_assoc($result)){
    $get=$get."<b><li>".$row["name"]."</li></b>";
  }
  $get=$get."</ul>";
  echo $get;
}
mysqli_close($conn);
?>