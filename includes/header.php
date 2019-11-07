<?php

//skaber connection til databasen
require_once('conn.php') 

//Her skal tilføjes, hvis der skal være forskel på navbarens udseende.                                                               
?>

<!DOCTYPE html>
<html lang="en">
<head>
	   <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   <meta name="description" content="">
	   <meta name="author" content="Projektgruppe 3">
	   <title><?php echo $page;?></title>                                       <!-- Gør siderne dynamiske, så der ændres navn i toppen -->                      
        <link rel="stylesheet" href="includes/styles/overallstyle.css" type="text/css">
    
        <!-- Bootstrap core css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="images/mutuum.ico">
</head>
    
<body>
 <!--Skaber menu-bar containeren-->
<div class="jumbotron" id="jumbotron">
<div id="llogin">
    <a href="login.pgp">LOG IND</a>
</div>  
    <a href="om_os.php"><img src="images/mutuumudenbaggrund.png" id="limg"></a>

    <div id="lmenu-bar">
        <!-- skaber funktionen, at man kan klikke-->
    <div id="lmenu" onclick="onClickMenu()">

                <!--skaber egentligt en firkant, som vi splitter op i CSS til burgeren-->
        <div id="lbar1" class="lbar"></div>
        <div id="lbar2" class="lbar"></div>
        <div id="lbar3" class="lbar"></div>
    </div>
                <!--Skaber navigationsbaren når burgeren er foldet ud-->
        <ul class="lnav" id="lnav">
                    <!-- Understående er punkter som står i navigationsbaren, når burgeren åbner-->
            <li><a href="#">Login </a> </li>
            <li><a href="opretbruger.php">Opret Bruger</a> </li>
            <li><a href="minside.php">Min side</a> </li>
            <li><a href="om_os.php">Om Mutuum</a> </li>
            <li><a href="faq.php">FAQ</a> </li>
        </ul>           
    </div>
 </div>

<!-- Skaber blokken som kommer fra burgeren når den åbnes og dækker siden-->
        <div class="lmenu-block" id="lmenu-block"> 
        </div>
        
        <!--JS link-->
        <script> 
            function onClickMenu(){
            document.getElementById("lmenu").classList.toggle("lchange");
            document.getElementById("lnav").classList.toggle("lchange");
            document.getElementById("lmenu-block").classList.toggle("lchange-block");
}</script>
    