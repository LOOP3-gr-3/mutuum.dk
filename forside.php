<!-- her henter jeg headeren ned -->
<?php
    $page = ('Forside');
    require_once('includes/header.php');
    
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>
<!--Alle figurer er sammensat i word af teamet og slides er fra fra egen hjemmeside-->

<link href="includes/styles/forside.css" type="text/css" rel="stylesheet">

    <div id="site-highlights">
        <hr>
        <h3><strong><i>HJÆLP DINE NÆRMESTE ELLER FJERNESTE</i></strong></h3>
        <hr>
    </div>

<br> <br>
    
<!-- Tilføjelse af tekst og figurer -->
<div style="text-align:center">
        <h2 class="w3-wide">Hvad er MUTUUM? </h2>
        <p class="w3-opacity"><i>Start din investering eller lån med kun ét klik. Mutuum lån er anderledes end traditionelle lån. Vi udbyder en platform hvor du frit kan udlåne til en ven eller en fremmed, hvor der er plads til at hjælpe eller tjene med tryghed og sikkerhed som sidens kerne </i></p>
    
    <img id="6grunde" src="images/6grunde.PNG">
    
    
<div id="vorescontainer" >
<br> <br>

    <div id="1kolonne"><img id="xw" src="images/lock.PNG">
        <h4 class="w3-wide"><strong>Lån sikkert med nemID</strong></h4>
        <p class="w3-opacity">Nem og hurtig ansøgning. Bliv godkendt samme dag, pengene udbetales direkte til din konto</p>
    
        <h3 id="xwlet">Let og enkelt</h3>
        <p class="w3-opacity"><i>Udfyld ansøgning til kreditgodkendelse - godkend den endelige rente og lånebetingelser. Alt står med stort, ingen skjulte gebyrer</i></p>
    </div>
    
    <div id="2kolonne">
        <img id="xw" src="images/checkbox.PNG"> <br><br>
        <h2 class="w3-wide"><strong>KRAV</strong></h2>
        <p class="w3-opacity">Du skal være fyldt 18 år. Din bruger skal være udfyldt på alle punkter med korrekte oplysninger</p>
  </div>
    
<br><br><br>
    
    <div id="3kolonne">
        <h2> LÅNGIVER </h2>
        <img id="xw" src="images/l%C3%A5ntager.PNG">
        <p class="w3-opacity"><i>Start din investering eller lån med kun ét klik. Det bliver kanon. Med Mutuum behøver du hverken være økonom eller millionær for at lave en professionel investering. </i></p>
    </div>
        
    <div id="4kolonne">
        <h2> LÅNTAGER </h2>
        <img id="xw" src="images/l%C3%A5ngiver.PNG">
        <p class="w3-opacity"><i>Start din investering eller lån med kun ét klik. Det bliver kanon. Med Mutuum behøver du hverken være økonom eller millionær for at lave en professionel investering. Du behøver heller ikke at stå med lort til halsen - for vi står klar til at hjælpe :-D  </i></p>


    </div>
</div>
</div>
    
 <?php 
    //require_once('includes/footer.php');
?>