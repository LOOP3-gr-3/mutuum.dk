<?php
$page = "Opret Bruger på MUTUUM";
require_once('includes/header.php');
if (isset($_SESSION['user_id'])) {
	header('Location: minside.php');
}
else { 
if(isset($_POST['fornavn']) && isset($_POST['efternavn']) && isset($_POST['mail']) && isset($_POST['password1']) && isset($_POST['telefon'])) {
	$fornavn = get_post($con, 'fornavn');
	$efternavn = get_post($con, 'efternavn');
	$mail = get_post($con, 'mail');
	$password1 = get_post($con, 'password1');
    $password2 = get_post($con,'password2');
	$mobil = get_post($con, 'telefon');	
    
    if($password1 != $password2){
        echo '<script>alert("Dine passwords matchede ikke. Prøv igen!")</script>' ;
        die();
    }
    
        
	$token = password_hash($password1, PASSWORD_DEFAULT);
    
    	$query = "INSERT INTO users(fornavn, efternavn, mail, password, mobil) VALUES('$fornavn', '$efternavn', '$mail', '$token', '$mobil')";
	$result = mysqli_query($con, $query);
	if(!$result) {
		if (mysqli_errno($con) == 1062) {
			echo '<script>alert("Email-adressen du har indtastet, er invalid eller allerede i brug. Vælg en ny og prøv igen.")</script>';
		require_once ('includes/footer.php');
		die();
		}
		else 
		echo '<script>alert("Der er opstået en ukendt fejl. Prøv igen, eller kontakt sideadministratoren")';
		require_once ('includes/footer.php');
		die();
    }
	if($result) {
		echo '<script>alert("Du er nu registreret på MUTUUM, velkommen! Log ind, og se dig omkring!")</script>';
		require_once ('includes/footer.php');
		die();
	}
}   
}
?>

<fieldset>
    <legend>Opret Bruger</legend>
    <form class="needs-validation" novalidate method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <div class="form-group" id="logmag">
            <label for="fornavn">Fornavn:</label>
            <input type="text" class="form-control" name="fornavn" placeholder="Fornavn" required>
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
            <label for="tf">Telefonnummer:</label>
            <input type="tel" class="form-control" name="telefon" placeholder="00 00 00 00" required>
        </div>
        <hr>
        <div class="form-group" id="logmag">
            <label for="p1">Password:</label>
            <input type="password" class="form-control" name="password1" id="p1" placeholder="********" onkeyup='check();' required>
        </div>
        <div class="form-group" id="logmag">
            <label for="p2">Gentag password:</label>
            <input type="password" class="form-control" name="password2" id="p2" placeholder="********" onkeyup='check();' required>
        </div>
        <button id="xwopretbruger" type="submit" class="btn btn-light" id="logmag"> &nbsp; Opret Bruger &nbsp; </button>
        <span id="passwordtjek"></span>
    </form>
</fieldset>

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
<?php
function get_post($con, $var) {
	return mysqli_real_escape_string($con, $_POST[$var]);
}
require_once('includes/footer.php');
?>
