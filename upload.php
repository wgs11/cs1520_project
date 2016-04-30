<?php
if(isset($_COOKIE["user"])) {
  $user = $_COOKIE["user"];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
  if (isset($_POST["submit"])) {
    if ($imageFileType != "lss") {
      echo "Sorry, only split files are allowed";
      $uploadOk = 0;
    }
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded." . "<br>";
        $splits = simplexml_load_file("uploads/" . $_FILES["fileToUpload"]["name"]);
        $game = $splits->GameName;
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gaming";
        $segments = $splits->Segments->children();
        $final = $segments[count($segments)-1]->SplitTimes->SplitTime->RealTime;
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM $user WHERE games = '$game'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 0) {
          $sql = "INSERT INTO $user (games, time) VALUES('$game', '$final' )";
          if ($conn->query($sql) === TRUE) {
//            echo "Game added to database"."<br>";
          } else echo "Error: " . $sql . "<br>" . $conn->error;
        }
        else echo "What";

        mysqli_close($conn);
      }
    }
  } else {
    echo "You're not logged in.";
  }
}
?>