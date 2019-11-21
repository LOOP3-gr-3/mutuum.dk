<!-- her henter jeg headeren ned -->
<?php
    $page = ('Forside');
    require_once('includes/header.php');
    
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>

<div id="om-os-container">
    
        <div style="text-align:center">
        <hr><h3><strong><i>HJÆLP DINE NÆRMESTE ELLER FJERNESTE</i></strong></h3>
    </div>
        <hr>
    
<!-- Tilføjelse af tekst og figurer -->
<div style="text-align:center">
    <div id="margin-container">
        <h2 id="hvad-er-mutuum">Hvad er MUTUUM? </h2>
        <p>Start din investering eller lån med kun ét klik. Mutuum lån er anderledes end traditionelle lån. Vi udbyder en platform hvor du frit kan udlåne til en ven eller en fremmed, hvor der er plads til at hjælpe eller tjene med tryghed og sikkerhed som sidens kerne</p>
    </div>



</div> 
        
<div style="text-align:center">
    
<div id="vorescontainer" >
<br> <br>

    <div id="1kolonne">
        <h2 id="hvad-er-mutuum">Lån sikkert med nemID</h2>
        <img id="xw" src="images/lock.PNG">
        <div id="margin-container">
        <p>Nem og hurtig ansøgning. Bliv godkendt samme dag, pengene udbetales direkte til din konto</p>
        </div>
    
       <div id="margin-container"> <h3 id="xwlet">Let og enkelt</h3>
        <p> Udfyld ansøgning til kreditgodkendelse - godkend den endelige rente og lånebetingelser. Alt står med stort, ingen skjulte gebyrer</p>
    </div>
    </div>
    
    <div id="2kolonne">
        <h2 id="hvad-er-mutuum">Betingelser</h2>
        <img id="xw" src="images/checkbox.PNG"> <br><br>
        
      <div id="margin-container"> <p class="w3-opacity">Du skal være fyldt 18 år. Din bruger skal være udfyldt på alle punkter med korrekte oplysninger</p>
  </div>
    </div>
    
<br><br><br>
    <hr>
    <br>
    <br>
    
    <div id="3kolonne">
        <h2> Långiver </h2>
        <img id="xw" src="images/l%C3%A5ntager.PNG">
      <div id="margin-container">
          <p>Start din investering eller lån med kun ét klik. Det bliver kanon. Med Mutuum behøver du hverken være økonom eller millionær for at lave en professionel investering. </p>
    </div>
    </div>
        
    <div id="4kolonne">
        <h2> Låntager </h2>
        <img id="xw" src="images/l%C3%A5ngiver.PNG">
        <div id="margin-container">
            <p>Start din investering eller lån med kun ét klik. Det bliver kanon. Med Mutuum behøver du hverken være økonom eller millionær for at lave en professionel investering. Du behøver heller ikke at stå med lort til halsen - for vi står klar til at hjælpe :-D </p>
        </div>


    </div>
</div>
</div>
</div> 
 <?php 
    require_once('includes/footer.php');
?>