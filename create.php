<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Upload</title>
    <link rel="stylesheet" type="text/css" href="split_styles.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div id="accountCreate">
      <form action = 'create.php' method = 'post'>
        <input type = "text" name = 'name' placeholder="username" required="true"><br>
        <input type = "text" name = 'sec_quest' placeholder="secret question" required="true"><br>
        <input type = "text" name = 'sec_ans' placeholder="secret answer" required="true"><br>
        <input type="text" name = 'password' placeholder="password" required="true"><br>
        <input type="text" name = 'verpass' placeholder="retype password" required="true"><br>
        <input type = "submit">
      </form>
    </div>
  <a href="home.php">Home</a>
  </body>
</html>
<?php
$username = "root";
$pass = "";
$server = "127.0.0.1";
$db = "gaming";
if (isset($_POST['name'])){
  $user = $_POST['name'];
  $password = $_POST['password'];
  $verpass = $_POST['verpass'];
  $sec_ans = $_POST['sec_ans'];
  $sec_quest = $_POST['sec_quest'];
  if ($password === $verpass){
    $conn = new mysqli($server,$username,$pass, $db);
    if($conn->connect_error){
      die("error".$conn->connect_error);
    }
    else{
      $sql = "INSERT INTO users(name, pass)
            VALUES ('$user', '$password')";
      if($conn->query($sql)===true){
        $sql = "CREATE TABLE $user(games varchar(30), time TIME)";
        if ($conn->query($sql)===true){
          echo "You're registered"."<br>";
        }
        else{
          echo "error inserting ".$conn->error."<br/>";
        }
      }else{
        echo "error inserting ".$conn->error."<br/>";
      }
    }
  }
  else echo "Please enter matching passwords.<br>";
}
