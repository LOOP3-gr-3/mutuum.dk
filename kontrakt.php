<!-- her henter jeg headeren ned -->
<?php
    $page = ('Mine aftaler');
    require_once('includes/header.php');
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>

<h1 id="xopretudlan">OPRET UDLÅN</h1>

<p id="xx"><I>Her vælger du hvor kontrakten skal sendes hen, til en vilkårlig bruger eller til en i dit netværk</I></p><br>

<!-- her laves funktionen der skal få den bestemte kontrakt til at blive vist, jeg koder knappen efter bootstrap btn btn-light, så de bliver grå-->

<div class="container">
    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#netveark" id="xnetveark">Låneftale via netværk</button> 
    
    <br>

<!--Her vælger jeg indholdet der skal vises når der trykkes på den bestemte knap-->
        <div id="netveark" class="collapse">
            <p id="beløb">Beløb</p>
            
                <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                angiv beløb i DKK
                </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">beløb 1</a>
                    <a class="dropdown-item" href="#">beløb 2</a>
                    <a class="dropdown-item" href="#">beløb 3</a>
                </div>      
            </div> <br>
                <p id="beløb">Rente</p>
            
                <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                angiv rente i %
                </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">1%</a>
                    <a class="dropdown-item" href="#"> 2%</a>
                    <a class="dropdown-item" href="#"> 3%</a>
                </div>      
            </div> <br>
                    <p id="beløb">Løbetid</p>
            
                <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                angiv perioden for lånet
                </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">1 måned</a>
                    <a class="dropdown-item" href="#"> 2 måneder</a>
                    <a class="dropdown-item" href="#">3 måneder</a>
                </div>    
            </div>
            <br>
            <p>Månedligt afdrag</p>
                <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Udregnet mnd. afdrag
                </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">geneerated1</a>
                </div>    
            </div> <br>
            <p>Gebyr for oprettelse af kontrakt skal betales af:</p>
    <!--Dette er switch button til at vælge om det er mig eller låntager der betaler-->
            <input type="checkbox" checked data-toggle="toggle" data-on="mig" data-off="låntager" data-onstyle="success" data-offstyle="default">
            <script>
            $(function() {
            $('#toggle-one').bootstrapToggle();
            })
            </script>

            
        </div>
</div>


<!-- HER STARTER LÅNEAFTALE TIL VILKÅRLIG-->
<div class="container">
    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#matchside" id="xmatchside">Låneftale til vilkårlig</button>
    
        <div id="matchside" class="collapse">
            <span id="more">
            <form>
            <input type="text" name="Beløb" placeholder="Beløb"></form>
            </span>
        </div>
</div>

<?php
    require_once('includes/footer.php');
?>