<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submit</title>
  <link rel="stylesheet" type="text/css" href="split_styles.css">

</head>
<body>
  <?php include 'header.php'; ?>
<div id="gameSubmit">
  <h3>SUBMIT A NEW GAME</h3>
  <form id="gamesub" onsubmit="validateForm(event)">
    <input id="gameInput" type="text" name="game" placeholder="Game Title">
    <input type="submit" value="Submit">
  </form>
  <div id="result"></div>
  <a href="home.php">Home</a>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script type="text/javascript" src="scripts/getGame.js"></script>
</body>
</html>