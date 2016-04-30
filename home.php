<!DOCTYPE html>
<html lang="eng">
  <head>
    <meta charset="UTF-8">
    <title> Split Comparator</title>
    <link rel="stylesheet" type="text/css" href="split_styles.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="login">
      <form action = "login.php" method = "post">
        <input type = "text" name = "name" placeholder="username"><br>
        <input type="text" name = "password" placeholder="password"><br>
        <input type="submit" class="button" value="Login">
      </form>
      <button onclick="logout()">Logout</button>
      <a href='create.php'>Join Site</a>
    </div>
    <div>
      <h2>Games by Letter</h2>
      <nav>
        <a>A</a>
        <a>B</a>
        <a>C</a>
        <a>D</a>
        <a>E</a>
        <a>F</a>
        <a>G</a>
        <a>H</a>
        <a>I</a>
        <a>J</a>
        <a>K</a>
        <a>L</a>
        <a>M</a>
        <a>N</a>
        <a>O</a>
        <a>P</a>
        <a>Q</a>
        <a>R</a>
        <a>S</a>
        <a>T</a>
        <a>U</a>
        <a>V</a>
        <a>W</a>
        <a>X</a>
        <a>Y</a>
        <a>Z</a>
      </nav>
    </div>
    <div id="gameList">
    </div>
    <div id="gameTime">
    </div>
    <a href='submit.php'>Submit a Game</a>
    <a href='personal.php'>Check Out Your Times</a>
    <a href="uploadGame.php">Submit a Run</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/getGame.js"></script>
  </body>
</html>


