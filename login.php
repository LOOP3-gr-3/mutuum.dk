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
    
</head>

<body>
<div class="container" id="nheading">
    <h2>Log Ind</h2>
 </div>
    <form action="/action_page.php">
      <div class="form-group" id="logmag">
        <label for="brugernavn/mailadresse">Brugernavn:</label>
        <input type="email" class="form-control" name="brugernavn/mailadresse" placeholder="kurt@kurtsen.dk" required>
      </div>
      <div class="form-group" id="logmag">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password1" id="p1" placeholder="********" required>
      </div>
      <button type="submit" class="btn btn-primary" id="logmag">Opret Bruger</button> 
  </form>
</body>
</html>