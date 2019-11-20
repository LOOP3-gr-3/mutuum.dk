<?php

    $querybeloeb = "SELECT * FROM beloeb ORDER BY beloeb";
    $resultbeloeb = mysqli_query($con, $querybeloeb);
if (!$resultbeloeb) {
die(mysqli_error($con));}
else {
$rowsbeloeb = mysqli_num_rows($resultbeloeb);}

?>
