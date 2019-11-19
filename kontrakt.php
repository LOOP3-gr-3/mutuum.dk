<!-- her henter jeg headeren ned -->
<?php
    $page = ('Opret lånekontrakt');
    require_once('includes/header.php');
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>

<h1 id="xopretudlan">OPRET UDLÅN</h1>

<p id="xx"><I>Her vælger du hvor kontrakten skal sendes hen, til en vilkårlig bruger eller til en i dit netværk</I></p><br>

<!-- her laves funktionen der skal få den bestemte kontrakt til at blive vist, jeg koder knappen efter bootstrap btn btn-light, så de bliver grå-->

<div class="container">
    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#netveark" id="xnetveark">Låneftale til netværk</button> 
    
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
            <p>Udreget afkast = <U>Some generated value , -</U></p>
            
            <!--Her kodes de to knapper i bunden, som skal føre til enten en siden hvor man underskriver eller sende kontrakten til mine aftaler under min profil, hvor den står som oprettede kontrakter-->
            <a href="underskrivoggem.php" target="_blank"><button type="button" class="btn btn-light">Underskriv og gem</button></a>
        <!-- Den anden knap -->
            <a href="kontrakt.php" target="_blank"><button type="button" class="btn btn-light">Gem låneaftale uden at underskrive</button></a> 
    </div>
</div>


<!-- HER STARTER LÅNEAFTALE TIL VILKÅRLIG-->
<div class="container">
    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#matchside" id="xmatchside">Låneftale til vilkårlig</button>
    
        <div id="matchside" class="collapse">
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
            
            <!-- her laes valgmulighed 1, mig for betaling af gebyr-->
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                <label class="custom-control-label" for="defaultInline1">mig</label>
                </div>

            <!--Vælg betaler til at være låntager-->
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                <label class="custom-control-label" for="defaultInline2">Låntager</label>
                </div>
            
            

        </div>
</div>

<?php
    require_once('includes/footer.php');
?>