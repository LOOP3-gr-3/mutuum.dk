<!-- her henter jeg headeren ned -->
<?php
    $page = ('Min profil');
    require_once('includes/header.php');


  if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
}
?>

<div id="site'highlights" style="text-align:center">
    <hr>
        <h1><strong>Min Profil</strong></h1>
    <hr>
</div>
<br>

<?php
$user_id = $_SESSION['user_id'];
$udfyld = "SELECT mail, fornavn, efternavn, mobil FROM users WHERE user_id = '$user_id'";

$result = mysqli_query($con, $udfyld);

$row = mysqli_num_rows($result);

if ($row > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Brugernavn: " . $row['mail'] . "&nbsp;Fornavn: " . $row['fornavn'] . "&nbsp;Efternavn: " . $row['efternavn'] . "&nbsp;Telefon nr.: " . $row['mobil'] . "<br>";
    
        } 
    } else {
    echo "<br>Data er ikke blevet oplyst. Opret bruger eller oplys manglende data";
}

mysqli_close($con);
    
?>

<!-- denne kode sikre, at brugeren bliver ført over til en nye side, når der klikkes på mine aftaler-->
<div>
    <a href="mineaftaler.php" class="btn btn-light" role="button" aria-pressed="true">Mine Aftaler</a><br><br>



    <U>Kredit oplysninger</U>
    <p>Disse oplysninger skal hentes over kredit verificeringen, det er derfor udenfor afgrænsningen, da dette er outsourcet</p>

    <!-- U sikre at der kunne en understreg under skriften-->
    <U>Rating</U>
    <p>Denne sker gennem kreditvurderingen og der dermed udenfor afgrænsningen. Men I dette felt ville der skulle trækkes data fra kreditverificingen, denne data skal kunne aflæse om hvorvidt brugeren for en AAA, AA, A, B eller C rating</p><br>
    <p><I>Din rating er blevet givet på baggrund af din kreditvurdering. Denne kan anmodes om at blive fornyet under "ret oplysninger"</I></p>


    <!-- denne kode sikre, at brugeren bliver ført over til en nye side, når der klikkes på ret oplysninger-->

    <a href="retoplysninger.php" class="btn btn-light" role="button" aria-pressed="true">Ret Oplysninger</a><br><br>

</div>


<?php
require_once('includes/footer.php');
?>
