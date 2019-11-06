<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        var check = function() {
            if (document.getElementById("p1").value ==
                document.getElementById("p2").value) {
                document.getElementById("passwordtjek").style.color = "green";
                document.getElementById("passwordtjek").innerHTML = " Password matcher!";
            } else {
                document.getElementById("passwordtjek").style.color = "red";
                document.getElementById("passwordtjek").innerHTML = " Password matcher ikke!";
            }
        }
    </script>
</head>
    
<body>

<div class="container" id="nheading">
      <h2>Opret Bruger</h2>
 </div>
<form onSubmit = "return checkPassword(this)">
    <form action="/action_page.php">
      <div class="form-group" id="logmag">
        <label for="fornavn">Fornavn:</label>
        <input type="text" class="form-control" name="fornavn" placeholder="Brugernavn" required>
      </div>
    <div class="form-group" id="logmag">
      <label for="efternavn">Efternavn:</label>
      <input type="text" class="form-control" name="efternavn" placeholder="Efternavn" required>
    </div>
    <div class="form-group" id="logmag">
      <label for="mail">Mail:</label>
        <input type="email" class="form-control" name="mail" placeholder="kurt@kurtsen.dk" required>
    </div>
    <div class="form-group" id="logmag">
      <label for="telefon">Telefonnummer:</label>
      <input type="tel" class="form-control" name="telefon" placeholder="+45 00 00 00 00" required>
    </div>  
      <hr>
    <div class="form-group" id="logmag">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password1" id="p1" placeholder="********" onkeyup='check();' required>
    </div>
    <div class="form-group" id="logmag">
      <label for="pwd-confirm">Gentag password:</label>
      <input type="password" class="form-control" name="password2" id="p2" placeholder="********" onkeyup='check();' required>
    </div>
    <button type="submit" class="btn btn-primary" id="logmag">Opret Bruger</button>
    <span id="passwordtjek"></span> 
  </form>
</form>

</body>
</html>

