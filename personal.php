<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Submit</title>
    <link rel="stylesheet" type="text/css" href="split_styles.css">
  </head>
  <body>
  <?php include 'header.php'; ?>
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gaming";
    if (!isset($_COOKIE["user"])){
      header('Location: home.php');
    }
    else {
    $user = $_COOKIE["user"];
    }
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM $user";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo "<table id='gamesPlayed'>";
      while($row = $result->fetch_assoc()){
      echo "<tr>";
      echo "<td>".$row["games"]."</td>";
      echo "<td>".$row["time"]."</td>";
      echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conn);
  }
?>
  <a href="home.php">Home</a>
  </body>
</html>
