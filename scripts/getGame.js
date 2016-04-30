$(document).ready(function(){
  $("a").click(function(){
    var send = event.target.textContent;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        document.getElementById("gameList").innerHTML=xhttp.responseText;
      }
    };
    xhttp.open("POST", "retGame.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("letter="+send);
  });
  $("b").click(function(){
    alert("I was clicked.");
    document.getElementById("gameList").innerHTML = "change this";
    var send = event.target.textContent;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        document.getElementById("gameTime").innerHTML=xhttp.responseText;
      }
    };
    xhttp.open("POST", "gamepage.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("letter="+send);
  });
});

function validateForm(event) {
  event.preventDefault();
  var x = document.forms["gamesub"]["game"].value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("result").innerHTML=(xhttp.responseText);
    }
  };
  xhttp.open("POST", "submitGame.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("game="+x);
}
function logout(){
  document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:01 GMT; /";
}
