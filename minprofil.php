<!-- her henter jeg headeren ned -->
<?php
    $page = ('Min profil');
    require_once('includes/header.php');
    //require_once('includes/footer.php');
  if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>
<link href="includes/styles/overallstyle.css" type="text/css" rel="stylesheet">

<h1>MIN PROFIL</h1> 
<br>

<?php
$udfyld = "SELECT mail, fornavn, efternavn, mobil FROM users";

$result = mysqli_query($con, $udfyld);
if (!$result) die(mysqli_error($con));

$row = mysqli_num_rows($result);

if ($row > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "brugernavn: " . $row['mail'] . "Fornavn: " . $row['fornavn'] .  "Efternavn: " . $row['efternavn'] . "Telefon nr.: " . $row['mobil'] . "<br>";
    
        } 
    } else {
    echo "<br>Data er ikke blevet oplyst. Opret bruger eller oplys manglende data";
}

mysqli_close($con);
    
?>

<!-- denne kode sikre, at brugeren bliver ført over til en nye side, når der klikkes på mine aftaler-->
<a href="mineaftaler.php" target="_blank"><br><br><h3>Mine aftaler</h3></a>

<U>Kredit oplysninger</U>
<p>Disse oplysninger skal hentes over kredit verificeringen, det er derfor udenfor afgrænsningen, da dette er outsourcet</p>

<!-- U sikre at der kunne en understreg under skriften-->
<U>Rating</U>
<p>Denne sker gennem kreditvurderingen og der dermed udenfor afgrænsningen. Men I dette felt ville der skulle trækkes data fra kreditverificingen, denne data skal kunne aflæse om hvorvidt brugeren for en AAA, AA, A, B eller C rating</p><br>
<p>Din rating er blevet givet på baggrund af din kreditvurdering. Denne kan anmodes om at blive fornyet under "ret oplysninger"</p>

<!-- denne kode sikre, at brugeren bliver ført over til en nye side, når der klikkes på ret oplysninger-->
<a href="retoplysninger.php" target="_blank"><h3>Ret oplysninger</h3></a>


</body>
</html>
