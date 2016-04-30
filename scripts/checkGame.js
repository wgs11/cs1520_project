function submitGame(){
  var game = document.forms["gamesub"]["game"];
  console.log(game);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("result").innerHTML=xhttp.responseText;
    }
  };
  xhttp.open("POST", "submitGame.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("game="+game);
}
$(document).ready(function(){
  $("#gamesub").submit(function(){
    var send = event.target.textContent;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        document.getElementById("gameList").innerHTML=xhttp.responseText;
        document.getElementById("gamesub").textContent = "";
      }
    };
    xhttp.open("POST", "retGame.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("letter="+send);
  });
});