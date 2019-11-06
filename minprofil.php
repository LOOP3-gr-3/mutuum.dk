<!-- her henter jeg headeren ned -->
<?php
    $page = ('FAQ');
    //require_once('includes/header.php');
    //require_once('includes/footer.php');
?>

<xh1>MIN PROFIL</xh1> <img id="profilbillede" src="images/mutuumudenbaggrund.png">

<?php
$udyld = "SELECT email, first_name, last_name, adress, city FROM users";

$result = mysqli_query($con, $udfyld);
if (!$result) die(mysqli_error($con, $udfyld));

$row = mysqli_num_rows($result);

if ($row > 0) {
    while($row = mysqli_fetch_assoc($result));
        echo "brugernavn: " . $row['eamil'] "<br>" . "Fornavn: " . $row['first_name'] . "<br>" . "Efternavn: " . $row['last_name'] . "<br>" . "By: " . $row['city'] . "<br>" . "Adresse: " . $row['address'] . "<br>";
}

    
?>
</body>
</html>
