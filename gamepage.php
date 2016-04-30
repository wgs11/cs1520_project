<!DOCTYPE html>
<html lang="eng">
  <head>
    <meta charset="UTF-8">
    <title> Split Comparator</title>
    <link rel="stylesheet" type="text/css" href="split_styles.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
  </body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gaming";
setcookie("game", "Super Mario 64", time() + (86400 * 30), "/");
if(!isset($_COOKIE["game"])){
  header('Location: home.php');
}
$game = $_COOKIE["game"];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
  $user = $row["name"];
  $sql = "SELECT * FROM $user WHERE games='$game'";
  $blank = $conn->query($sql);
  if ($blank) {
    if ($blank->num_rows > 0) {
      $otherrow = $blank->fetch_assoc();
      echo $otherrow["time"]."<br>";
    }
  }
}
?>