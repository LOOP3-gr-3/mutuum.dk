<!-- her henter jeg headeren ind og kontraktdatabasen -->
<?php 
    $page = ('Oprettelse af kontrakt');
/*her henter jeg headeren ned*/
    require_once('includes/header.php');
    if (isset($_SESSION['user_id'])) {
        header('location: kontrakt.php');
}
if (isset($_POST['beloeb']) && isset($_POST['rente']) && isset($_POST['bindingsperiode']) && isset($_POST['maanedlig_afdrag']) && isset($_POST['kontraktbrud']) && isset($_POST['kredit_it'])) {
    $laangiver_user_id = $_SESSION['user_id'];
    $laangiver_user_id = $_POST['laangiver_user_id'];
    $laantager_user_id = $_POST['laantager_user_id'];
    $beloeb_id = $_POST['beloeb_id'];
    $rente_id = $_POST['rente_id'];
    $bindingsperiode_id = $_POST['bindingsperiode_id'];
    $maanedlig_afdrag = $_POST['maanedlig_afdrag'];
    $kredit_id = $_POST['kredit_id'];
    $kontraktbrud_id = $_POST['kontraktbrud_id'];
    $laangiver_underskrift_id = $_POST['laangiver_underskrift_id'];
    $reg_underskrift_1 = $_POST['reg_underskrift_1'];
    $laantager_underskrift_id = $_POST['laantager_underskrift_id'];
    $reg_underskrift_1 = $_POST['reg_underskrift2'];
    $betalings_status_id = $_POST['betalings_status_id'];
    
    
    $laangiver_user_id = get_post['laangiver_user_id'];
    $laantager_user_id = $_POST['laangiver_user_id'];
    $beloeb_id = $get_post($con, 'beloeb');
    $rente_id = $get_post($con, 'rente');
    $bindingsperiode_id = $get_post($con, 'loebetid');
    $maanedlig_afdrag = $get_post($con, 'afdrag');
    $kredit_it = $get_post($con, 'kredit');
    $kontraktbrud_id = $get_post($con, 'kontraktbrud');
    $laangiver_underskrift_id = $get_post($con, 'laangiver_underskrift_id');
    $reg_underskrift_1 = $get_post($con, 'time');
    $laantager_underskrift_id = $get_post($con, 'laantager_underskrift_id');
    $reg_underskrift_1 = $get_post($con, 'time');
    $betalings_status_id = $get_post($con, 'status');
    
   $query = "INSERT INTO kontrakt(laangiver_user_id, laangiver_user_id, beloeb_id, rente_id, bindingsperiode_id, maanedlig_afdrag, kontraktbrud_id) VALUES('$laangiver_user_id', '$laantager_user_id', '$beloeb_id', '$rente_id', '$bindingsperiode_id', '$maanedlig_afdrag', '$kontraktbrud_id') + INSERT INTO betalings_status(bindingsperiode_id) VALUES('$bindingsperiode_id')";
    $result = mysqli_query($con, $query);
    if (!$result) die (mysqli_error($con));
    else {
              
        echo "<h2 class='bg text-center'>Din kontrakt er nu gemt</h2>";
            }
    
    foreach ($errors as $error) {
        echo "<script>alert('" . $error . "');
    window.location.href='upload_1.php';
    </script>";
    die();    
                }
    }
     
?>
<div id="om-os-container">
<div id="site'highlights" style="text-align:center">
    <hr>
    <h1><strong>Opret Kontrakt</strong></h1>
    <hr>
</div>

<p id="xx"><I>Udfyld venligst nedenstående felter til din kontrakt:</I></p><br>

<!-- her laves funktionen der skal få den bestemte kontrakt til at blive vist, jeg koder knappen efter bootstrap btn btn-light, så de bliver grå-->

<div class="container">
    <form novalidate method="post" enctype="multipart/form-data">

        <!--Her vælger jeg indholdet der skal vises når der trykkes på den bestemte knap-->
        <div>
            <p id="beløb">Beløb</p>


            <select class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="beloeb">


                <option selected value="">Vælg et beløb i DKK</option>
                <?php 
            
            $query1 = "SELECT * FROM beloeb ORDER BY beloeb";    
            $result1 = mysqli_query($con, $query1);
            $rows = mysqli_num_rows($result1);                          
            while($row1 = mysqli_fetch_assoc($result1)) {
            $beloeb_id = $row1['beloeb_id'];
            $beloeb = $row1['beloeb'];
            $value = $row1['value'];
            ?>

                <option value="<?php echo $beloeb_id;?>"> <?php echo $beloeb;?> <?php echo $value;?>
                </option>
                <?php
                }
            ?>
            </select>
        </div>

        <br>
        <div>
            <p id="beløb">Rente</p>
            <select class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="beloeb">
                <option selected value="">Vælg en rente i %</option>
                <?php
            $query2 = "SELECT * FROM rente ORDER BY rente";    
            $result2 = mysqli_query($con, $query2);
            $rows = mysqli_num_rows($result2);                          
            while($row2 = mysqli_fetch_assoc($result2)) {
            $rente_id = $row2['rente_id'];
            $rente = $row2['rente'];
            $value = $row2['value'];
            ?>
                <option value="<?php echo $rente_id;?>"> <?php echo $rente;?> <?php echo $value;?>
                </option>
                <?php
                }
            ?>
            </select>
        </div>

        <br>
        <div>
            <p id="beløb">Løbetid</p>


            <select class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="beloeb">
                <option selected value="">Vælg løbetiden på kontrakten</option>
                <?php
            $query3 = "SELECT * FROM bindingsperiode ORDER BY loebetid";    
            $result3 = mysqli_query($con, $query3);
            $rows = mysqli_num_rows($result3);                          
            while($row3 = mysqli_fetch_assoc($result3)) {
            $bindingsperiode_id = $row3['bindingsperiode_id'];
            $loebetid = $row3['loebetid'];
            $value = $row3['value'];
            ?>

                <option value="<?php echo $bindingsperiode_id;?>"> <?php echo $loebetid;?> <?php echo $value;?>
                </option>
                <?php
                }
            ?>
            </select>
        </div>

        <br>
        <p>Månedligt afdrag</p>
        <div>

            <?php
            $maanedlig_afdrag = ""
        ?>

        </div> <br>
        <strong>Kreditrating</strong>

        <div>
            <p id="beløb"><I>Vælg venligst hvilken kreditrating, som afgør, hvem der kan låne dine penge</I></p>


            <select class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="beloeb">
                <option selected value="">Vælg kreditrating</option>
                <?php
            $query6 = "SELECT * FROM kredit ORDER BY kredit_id";    
            $result6 = mysqli_query($con, $query6);
            $rows = mysqli_num_rows($result6);                          
            while($row6 = mysqli_fetch_assoc($result6)) {
            $kredit_id = $row6['kredit_id'];
            $kreditrating = $row6['kreditrating'];
            ?>

                <option value="<?php echo $kredit_id;?>"> <?php echo $kreditrating;?>
                </option>
                <?php
                }
            ?>
            </select>
        </div><br>


        <!--afsnit for kontraktbrud med menu for hvilke konsekvenser der skal være ved kontraktbrud-->
        <strong>Kontraktbrud</strong>
        <div>
            <p id="beløb"><I>Vælg venligst en konsekvens, ved kontraktbrud</I></p>
            <select class="btn btn-light dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="beloeb">
                <option selected value="">Vælg konsekvens ved brud på kontrakt</option>
                <?php
            $query4 = "SELECT * FROM kontraktbrud ORDER BY brud";    
            $result4 = mysqli_query($con, $query4);
            $rows = mysqli_num_rows($result);                          
            while($row4 = mysqli_fetch_assoc($result4)) {
            $kontraktbrud_id = $row4['kontraktbrud_id'];
            $brud = $row4['brud'];
            
            ?>
                <option value="<?php echo $kontraktbrud_id;?>"> <?php echo $brud;?>
                </option>
                <?php
                }
            ?>
            </select>
        </div>


        <!--Jeg er ikke helt sikker på hvordan I vil have boxen med den udregnet/generated value, men har bare lavet en U med value indeni, som symbolisere det for nu-->
        <br><br>
        <p><I>Udreget afkast = <U>Some generated value , -</U></I></p>
        <br>
        <p><I>Indtast E-mail på den person, som er oprettet på MUTUUM, som skal underskrive kontrakten. <br>Udfyldes feltet ikke, så vil den blive synlig for alle låntagere på Matchsiden</I></p>
        <div class="form-group" id="logmag">
            <label for="mail">Mail på låntager</label>

            <input type="email" class="form-control" name="mail" placeholder="låntager@mail.dk">
            <?php
                if(isset($_POST['mail'])) {
                    $mail = $_POST['mail'];
                    $query5 = "INSERT INTO kontrakt FROM users WHERE mail = '$mail'";
                    $result5 = mysqli_query($con, $query5);
                    if (mysqli_errno($con) == 1062) {
			         echo '<script>alert("Den vil være synlig og tilgængelig under Matchsiden for din låntager");</script>';
                        /*Tjekker for at email er i systemet */
                }
                else
                    $_POST['mail'];
                }
            ?>
        </div>

        <!--Her kodes de to knapper i bunden, som skal føre til enten en siden hvor man underskriver eller sende kontrakten til mine aftaler under min profil, hvor den står som oprettede kontrakter-->
        <!--Her skrive rjeg en tekst, den skal deles i to afsnist, deraf <br>, dernæst vælger jeg at skrive at kontrakten bliver gemt til mine aftaler, denne har jeg gjort til en knap med button, understreget med U og kursiv med I og til slut sluttes paragraffen med en </p>-->
        <br><br>
        <p><I>"Underskriv og gem", her lægges kontrakten ud på Matchsiden, så en vilkårlig kan underskrive og indgå i en juridisk bindende kontrakt.
                <br> "Gem låneaftale", så gemmes den under Min profil - <I>Mine aftaler</I></I></p>
        <!--Her kodes de to knapper i bunden, som skal føre til enten en siden hvor man underskriver eller sende kontrakten til mine aftaler under min profil, hvor den står som oprettede kontrakter-->
        <a href="mineaftaler.php" target="_blank">
            <?php 
            
            $laangiver_underskrift_id = 2;    
        ?>
            <button method="post" type="submit" id="xwknap" class="btn btn-light" value="<?php $laangiver_underskrift_id; ?>" name="laangiver_underskrift_id">

                Underskriv og gem</button></a>

        <!-- Den anden knap -->
        <a href="mineaftaler.php" target="_blank"><button type="submit" id="xwknap" class="btn btn-light">Gem låneaftale</button></a>
        <!--Slut tag på container og på det der skulle collapses, altså vises når der bliver trykket på den knap der er angivet i containere, sluttagget af de to </div> -->

    </form>
    <br>
</div>

</div>

<?php 
function get_post($con, $var) {
    return mysqli_real_escape_string($con, $_POST[$var]);
}
    require_once('includes/footer.php');
?>

