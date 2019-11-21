<!-- her henter jeg headeren ind og kontraktdatabasen -->
<?php 
    $page = ('Oprettelse af kontrakt');
/*her henter jeg headeren ned*/
    require_once('includes/header.php');
    if (isset($_SESSION['user_id'])) {
        header('location: kontrakt.php');
}
if (isset($_POST['beloeb']) && isset($_POST['rente']) && isset($_POST['bindingsperiode']) && isset($_POST['maanedlig_afdrag']))  {
    $beloeb_id = $_POST['beloeb_id'];
    $rente_id = $_POST['rente_id'];
    $bindingsperiode_id = $_POST['bindingsperiode_id'];
    $maanedlig_afdrag = $_POST['maanedlig_afdrag'];
    
    $beloeb_id = $get_post($con, 'beloeb');
    $rente_id = $get_post($con, 'rente');
    $bindingsperiode_id = $get_post($con, 'loebetid');
    $maanedlig_afdrag = $get_post($con, 'afdrag');
    
   $query = "INSERT INTO kontrakt(beloeb_id, rente, bindingsperiode) VALUES('$beloeb_id', '$rente_id', '$bindingsperiode_id') + INSERT INTO betalings_status(bindingsperiode_id) VALUES('$bindingsperiode_id')";
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

<div id="site'highlights" style="text-align:center">
    <hr>
    <h1><strong>Opret Kontrakt</strong></h1>
    <hr>
</div>

<p id="xx"><I>Udfyld venligst nedenstående felter til din kontrakt:</I></p><br>

<!-- her laves funktionen der skal få den bestemte kontrakt til at blive vist, jeg koder knappen efter bootstrap btn btn-light, så de bliver grå-->

<div class="container">

    <!--Her vælger jeg indholdet der skal vises når der trykkes på den bestemte knap-->
    <br>
    <br>
    <p id="beløb">Beløb</p>

    <div class="btn btn-light dropdown-toggle">
        <select class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" action="<?php echo $_SERVER['$PHP_SELF']; ?>" method="post" name="beloeb">

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <option selected value="">Vælg et beløb i DKK</option>
                <?php 
                echo $_SERVER['$PHP_SELF'];
            $query = "SELECT * FROM beloeb ORDER BY beloeb";    
            $result = mysqli_query($con, $query);
            $rows = mysqli_num_rows($result);                          
            while($row1 = mysqli_fetch_assoc($result)) {
            $beloeb_id = $row1['beloeb_id'];
            $beloeb = $row1['beloeb'];
            $value = $row1['value'];
            ?>

                <option value="<?php echo $beloeb_id;?>"> <?php echo $beloeb;?> <?php echo $value;?>
                </option>
                <?php
                }
            ?>

            </div>

        </select>
    </div>

    <br>
    <p id="beløb">Rente</p>
    <div class="btn btn-light dropdown-toggle">
        <select class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" action="<?php echo $_SERVER['$PHP_SELF']; ?>" method="post" name="rente">

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <option selected value="">Vælg en rente i %</option>
                <?php
            $query = "SELECT * FROM rente ORDER BY rente";    
            $result = mysqli_query($con, $query);
            $rows = mysqli_num_rows($result);                          
            while($row1 = mysqli_fetch_assoc($result)) {
            $rente_id = $row1['rente_id'];
            $rente = $row1['rente'];
            $value = $row1['value'];
            ?>
                <option value="<?php echo $rente_id;?>"> <?php echo $rente;?> <?php echo $value;?>
                </option>
                <?php
                }
            ?>

            </div>

        </select>
    </div>
    <br>
    
    <p id="beløb">Løbetid</p>

      <div class="btn btn-light dropdown-toggle">
        <select class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" action="<?php echo $_SERVER['$PHP_SELF']; ?>" method="post" name="loebetid">

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 <option selected value="">Vælg løbetiden på kontrakten</option>
                <?php
            $query = "SELECT * FROM bindingsperiode ORDER BY loebetid";    
            $result = mysqli_query($con, $query);
            $rows = mysqli_num_rows($result);                          
            while($row1 = mysqli_fetch_assoc($result)) {
            $bindingsperiode_id = $row1['bindingsperiode_id'];
            $loebetid = $row1['loebetid'];
            $value = $row1['value'];
            ?>

                <option value="<?php echo $bindingsperiode_id;?>"> <?php echo $loebetid;?> <?php echo $value;?>
                </option>
                <?php
                }
            ?>

            </div>

        </select>
    </div>
    <br>
    <p>Månedligt afdrag</p>
    <div>
        
        <?php
            $maanedlig_afdrag = ""
        ?>
        
    </div> <br>
    
    
    <!--afsnit for kontraktbrud med menu for hvilke konsekvenser der skal være ved kontraktbrud-->
    <strong>Kontraktbrud</strong>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Forhøj rente med 2%
        </label>
    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Vedlæg gebyr på:
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">vælg gebyr
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">100 , -</a>
                    <a class="dropdown-item" href="#">200 , -</a>
                    <a class="dropdown-item" href="#">300 , -</a>
                </div>
            </div> <br>
        </label>
    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="" disabled>Forlæng løbetid med 2 måneder
        </label>
    </div>
    <!--Jeg er ikke helt sikker på hvordan I vil have boxen med den udregnet/generated value, men har bare lavet en U med value indeni, som symbolisere det for nu-->
    <br><br>
    <p><I>Udreget afkast = <U>Some generated value , -</U></I></p>

    <!--Her kodes de to knapper i bunden, som skal føre til enten en siden hvor man underskriver eller sende kontrakten til mine aftaler under min profil, hvor den står som oprettede kontrakter-->
    <!--Her skrive rjeg en tekst, den skal deles i to afsnist, deraf <br>, dernæst vælger jeg at skrive at kontrakten bliver gemt til mine aftaler, denne har jeg gjort til en knap med button, understreget med U og kursiv med I og til slut sluttes paragraffen med en </p>-->
    <br><br>
    <p><I>"Underskriv og gem", her sendes kontrakten ud, så en vilkårlig kan underskrive og indgå i en juridisk bindende kontrakt.
            <br> "Gem låneaftale", så gemmes den under din profil --> <button type="button" href="mineaftaler.php" target="_blank"><U> mine aftaler</U></button></I></p>
    <!--Her kodes de to knapper i bunden, som skal føre til enten en siden hvor man underskriver eller sende kontrakten til mine aftaler under min profil, hvor den står som oprettede kontrakter-->
    <a href="underskrivoggem.php" target="_blank"><button type="button" class="btn btn-light">Underskriv og gem</button></a>

    <!-- Den anden knap -->
    <a href="kontrakt.php" target="_blank"><button type="button" class="btn btn-light">Gem låneaftale</button></a>
    <br>
    <br>
    <!--Slut tag på container og på det der skulle collapses, altså vises når der bliver trykket på den knap der er angivet i containere, sluttagget af de to </div> -->


    <br>
    <p>Månedligt afdrag</p>
    <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Udregnet mnd. afdrag <U>generated 1 , - </U>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">mulighed 1</a>
        </div>
    </div> <br>
    <p>Gebyr for oprettelse af kontrakt skal betales af:</p>

    <!-- her laes valgmulighed 1, mig for betaling af gebyr-->
    <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="defaultInline1">
        <label class="custom-control-label" for="defaultInline1">mig</label>
    </div>

    <!--Vælg betaler til at være låntager-->
    <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="defaultInline2">
        <label class="custom-control-label" for="defaultInline2">Låntager</label>
    </div> <br> <br>
    <!--afsnit for kontraktbrud med menu for hvilke konsekvenser der skal være ved kontraktbrud-->
    <strong>kontraktbrud</strong>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Forhøj rente med 2%
        </label>
    </div>

    <!-- "vedlæg gebyr" laves som et checkbox punkt med en dropdown nedeunder-->
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="">Vedlæg gebyr på:
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">vælg gebyr
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">100 , -</a>
                    <a class="dropdown-item" href="#">200 , -</a>
                    <a class="dropdown-item" href="#">300 , -</a>
                </div>
            </div>
        </label>
    </div>

    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="" disabled>Forlæng løbetid med 2 måneder
        </label>
    </div>
    <!--Jeg er ikke helt sikker på hvordan I vil have boxen med den udregnet/generated value, men har bare lavet en U med value indeni, som symbolisere det for nu-->
    <br><br>
    <p><I>Udreget afkast = <U>Some generated value , -</U></I></p>

    <!--Her kodes de to knapper i bunden, som skal føre til enten en siden hvor man underskriver eller sende kontrakten til mine aftaler under min profil, hvor den står som oprettede kontrakter-->
    <!--Her skrive rjeg en tekst, den skal deles i to afsnist, deraf <br>, dernæst vælger jeg at skrive at kontrakten bliver gemt til mine aftaler, denne har jeg gjort til en knap med button, understreget med U og kursiv med I og til slut sluttes paragraffen med en </p>-->
    <br><br>
    <p><I>"Underskriv og gem", her sendes kontrakten ud, så en vilkårlig kan underskrive og indgå i en juridisk bindende kontrakt.
            <br> "Gem låneaftale", så gemmes den under din profil --> <button type="button" id="xwknap" href="mineaftaler.php" target="_blank">mine aftaler</button></I></p>
    <!--Her kodes de to knapper i bunden, som skal føre til enten en siden hvor man underskriver eller sende kontrakten til mine aftaler under min profil, hvor den står som oprettede kontrakter-->
    <a href="mineaftaler.php" target="_blank">
        <?php 
            $laangiver_underskrift_id = 2;    
        ?>        
        <button type="submit" id="xwknap" class="btn btn-light" value="<?php $laangiver_underskrift_id; ?>">
        
        Underskriv og gem</button></a>

    <!-- Den anden knap -->
    <a href="mineaftaler.php" target="_blank"><button type="submit" id="xwknap" class="btn btn-light">Gem låneaftale</button></a>
    <!--Slut tag på container og på det der skulle collapses, altså vises når der bliver trykket på den knap der er angivet i containere, sluttagget af de to </div> -->
</div>

<?php 
function get_post($con, $var) {
    return mysqli_real_escape_string($con, $_POST[$var]);
}
?>

</body>

</html>
