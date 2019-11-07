<!-- her henter jeg headeren ned -->
<?php
    $page = ('Mine aftaler');
    require_once('includes/header.php');
    //require_once('includes/footer.php');
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>
<h1>Mine aftaler</h1>
<p>Her ses alle dine aftaler, de er sorteret efter dato, der kan søges efter en bestemt mail, hvis man søger et bestemt lån </p>

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