<?php
$page = 'Login';
require_once('includes/header.php');
?>

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