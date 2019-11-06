<!-- her henter jeg headeren ned -->
<?php
    $page = ('FAQ');
    require_once('includes/header.php');
    //require_once('includes/footer.php');
?>

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
    echo "<br>Data er ikke blevet oplyst";
}

mysqli_close($con);
    
?>

</body>
</html>
