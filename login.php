<?php
$page = 'Log Ind';
require_once('includes/header.php');

if(isset($_SESSION['user_id'])) {
    header('Location: minside.php');
}
if (isset($_COOKIE['login'])) {
	$mail = $_COOKIE['login'];
} else {
	$mail = '';
}
if(isset($_POST['mail']) && isset($_POST['password'])) {
    $mail_temp = $_POST['mail'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE mail = '$mail_temp'";
    $result = mysqli_query($con, $query);
    if (!$result){
        echo "MySQL Error: " . mysqli_error($con);
        require_once ('includes/footer.php');
        die();  
    } 
    else {
        $rows = mysqli_num_rows($result);
        if ($rows == 0) {
            echo '<script>alert("Denne bruger eksisterer ikke")</script>';
        }
        while($row = mysqli_fetch_assoc($result)){
            $mail = $row['mail'];
            $database_password = $row['password'];
            $user_id = $row['user_id'];
            $token = password_verify($password, $database_password);
            if ($token != $password) {
					echo '<script>alert("Forkert brugernavn eller kodeord")</script>';
            }
            if ($token == $password) {
                $_SESSION['user_id'] = $user_id;
                header('Location: minside.php');
            }
        }
    }
}
?>

<div class="container" id="nheading">
    <h2>Log Ind</h2>
</div>
<form class="form-signin" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <!-- sikrer at vi sender "ren" data op til databasen -->
    <div class="form-group" id="logmag">
        <label for="mail">Brugernavn:</label>
        <input type="email" class="form-control" name="mail" value="" placeholder="kurt@kurtsen.dk" required> 
    </div>
    <div class="form-group" id="logmag">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="password" id="p1" placeholder="********" required>
    </div>
    <button class="btn btn-primary" type="submit">Log Ind</button>
    <br>
    <br>
    <p>Ikke registreret endnu? Tryk her:</p><a href="opretbruger.php" class="btn btn-secondary" role="button" aria-pressed="true">Opret Bruger</a>
</form>
<br>


<?php
require_once('includes/footer.php');
?>
