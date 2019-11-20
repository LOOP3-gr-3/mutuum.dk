<?php  
$page = 'MinSide';
require_once('includes/header.php');



if(!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();   
     /*Her bliver brugeren dirigeret til login, hvis de ikke er logget ind */
}                       
?>


<!-- Følgende er lavet vha. Bootstrap, hvor billederne bliver stilllet i Bootstraps grid system -->
<!-- Ikonerne er fra Word Documents 2016 -->
<div id="site'highlights" style="text-align:center">
    <hr>
        <h1><strong>Min Side</strong></h1>
    <hr>
</div>

<div id="container-las">
    <div id="container1-5">
        <div id="l-billede">
            <a href="minprofil.php"><img id="billede1" src="images/profil.png"></a>
        </div>
        
        <div id="l-tekst">
            <a href="minprofil.php">Min profil</a>
            
        </div>

    </div>
    
    <div id="container2-5">
        <div id="l-billede">
            <a href="KFUM.php"><img id="billede1" src="images/netvaerk.png"></a>
            
        </div>
        
        <div id="l-tekst">
            <a href="KFUM.php">Rådgivning</a>
            
        </div>
    </div>
    
    
    <div id="container3-5">
        <div id="l-billede">
            <a href="matchsite.php"><img id="billede1" src="images/match.png"></a>
        </div>
        
        <div id="l-tekst">
            <a href="matchsite.php">Match site</a>
            
        </div>
    </div>
    
    
    <div id="container4-5">
        <div id="l-billede">
            <a href="kontrakt.php" taget="_blank"><img id="billede1" src="images/kontrakt.png"></a>
        </div>
        
        <div id="l-tekst">
            <a href="kontrakt.php">Opret kontrakt</a>
            
        </div>
    </div>
    
    <div id="container5-5">
        <div id="l-billede">
            <a href="statistik.php"><img id="billede1" src="images/hej2.png"></a>
        </div>
        
        <div id="l-tekst">
            <a href="statistik.php">Statistik</a>
            
        </div>
    </div>
</div>
    
<?php
require_once('includes/footer.php');
?>




     