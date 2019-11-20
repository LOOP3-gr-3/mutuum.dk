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

<!--Her vælger jeg indholdet der skal vises når der trykkes på den bestemte knap-->
       <br> <br>  <div id="netveark" class="collapse">
    
    <!--Hvert p er en ny variabel der skal indsætttes-->
    <p id="beløb">Beløb</p>
            
            <!--Her laves selve dropdown funktionen med valgte titel-->
                <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                angiv beløb i DKK
                </button>
            
            <!--Her vælges de muligheder dropdownmenuen skal indeholde-->
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
    <br><br><p><I>Udreget afkast = <U>Some generated value , -</U></I></p>
            
    <!--Her kodes de to knapper i bunden, som skal føre til enten en siden hvor man underskriver eller sende kontrakten til mine aftaler under min profil, hvor den står som oprettede kontrakter-->
     <!--Her skrive rjeg en tekst, den skal deles i to afsnist, deraf <br>, dernæst vælger jeg at skrive at kontrakten bliver gemt til mine aftaler, denne har jeg gjort til en knap med button, understreget med U og kursiv med I og til slut sluttes paragraffen med en </p>-->    
    <br><br><p><I>"Underskriv og gem", her sendes kontrakten ud, så en vilkårlig kan underskrive og indgå i en juridisk bindende kontrakt. 
    <br> "Gem låneaftale", så gemmes den under din profil --> <button type="button" href="mineaftaler.php" target="_blank"><U> mine aftaler</U></button></I></p>        
    <!--Her kodes de to knapper i bunden, som skal føre til enten en siden hvor man underskriver eller sende kontrakten til mine aftaler under min profil, hvor den står som oprettede kontrakter-->
            <a href="underskrivoggem.php" target="_blank"><button type="button" class="btn btn-light">Underskriv og gem</button></a>
        
            <!-- Den anden knap -->
            <a href="kontrakt.php" target="_blank"><button type="button" class="btn btn-light">Gem låneaftale</button></a>
<!--Slut tag på container og på det der skulle collapses, altså vises når der bliver trykket på den knap der er angivet i containere, sluttagget af de to </div> -->      
    </div>
</div>












<!-- *********HER STARTER LÅNEAFTALE TIL VILKÅRLIG**********-->
<div class="container">
    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#matchside" id="xmatchside">Låneftale til vilkårlig</button>
    
        <div id="matchside" class="collapse">
            
<!--Hvert p er en ny variabel der skal indsætttes-->
    <br><p>Hvilke risikogrupper vil du tilbyde dit udlån</p>
    
    <!--Det første stykke af koden er den der sikre at der er et label og en checkbox til hver af de forskellige risikogrupper-->
            <!--AAA-->
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="defaultInline1">
                <label class="custom-control-label" for="defaultInline1">AAA</label>
                </div>

            <!--AA-->
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                    <label class="custom-control-label" for="defaultInline2">AA</label></div>
                    
            <!--A-->
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                    <label class="custom-control-label" for="defaultInline2">A</label></div>
                    
            <!--B-->
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                    <label class="custom-control-label" for="defaultInline2">B</label></div>
                    
            <!--A-->
                <div class="custom-control custom-checkbox custom-control-inline">
                <input type="checkbox" class="custom-control-input" id="defaultInline2">
                <label class="custom-control-label" for="defaultInline2">C</label>
                </div><br><br> 
                    
            <!--dropdown for beløb, først angiver jeg mit p, teksten og herefter hvad dropdown menuen skal indeholde og hedde i boksen inden man "dropper down", dette er det samme for de næste 3 p´er-->   
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
            
        <!--Månedtlig afdrag i denne her skal laves en anelse om, da der skal kunne tilvælges forhandling-->
    <p>Månedligt afdrag <U>generated 1 min. - max.</U></p>
                    
 <!-- MEGET DETAJLERET FORKLARING, DA DENNE HAR ET TWIST EKSTRA. 

Da der skal laves en checkbox til forhandling, hvor der kun skal vises andre mulighe løbetider, så benytter jeg samme kode som i toppen, der siger at  ved click af dette i den bestemt container, så skal den kun vises vha. collape, hvis den er tjekket af. Denne er nedenstående kode,da jeg gerne vil have at den skal collapse stadig, har jeg kombineret koden for en checkbox med data-toggle og collapse-->      
                <div class="container">
                        <div class="form-check form-check-inline" data-toggle="collapse" data-target="#forhandling">
                            <input type="checkbox" class="form-check-input" data-toggle="collapse" data-target="#løbetider" id="forhandling">
                        
                        <!--Her vælges der den titel der skal være ud fra checkboxen-->
                            <label class="form-check-label" for="forhandling">Forhandling</label>
                        </div> 

                        <!--Her vælger jeg indholdet der skal vises når der tjekkes af ved forhandling vha. id´et der er hashtagget ovenfor og kommandoen collapse-->
                                
                                <div id="forhandling" class="collapse">  
                        
                        <!--Dette er bare valgt for at have en titel inden dropdown menuen-->
                        <p>Løbetid til forhandling</p>
                            
                            <!--Her kodes selve dropdown menuen, den får titlen = vælg løbetid-->
                                <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">vælg løbetid</button>
                                    
                                <!--Her vælges kategorierne i dropdown menuen-->
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">løbetid 1</a>
                                    <a class="dropdown-item" href="#">løbetid 2</a>
                                    </div>    
                                    </div>
                                </div>
                </div><br>
    <!--Her er vi tilbage til at skulle checke af om det er låntager eller långiver der betaler, lige nu kan man checke beggge bokse af, tænkte det skulle gøre at långiver og låntager splitter gebyret? Hvad siger I til det?-->
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
    <!--Her skal der laves en klassisk dropdown, hvor der vælges hvor mange kontrakter man vil ligge til udlån, jeg bruger bevidst ikke ordet matchsiden-->        
    <br><br><p id="beløb">Hvor mange á denne kontrakt skal der ligges til udlån?</p>
            
                <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                angiv antal
                </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">1</a>
                    <a class="dropdown-item" href="#">2</a>
                    <a class="dropdown-item" href="#">3</a>
                    <a class="dropdown-item" href="#">4</a>
                    <a class="dropdown-item" href="#">5</a>
                    <a class="dropdown-item" href="#">6</a>
                    <a class="dropdown-item" href="#">7</a>
                    <a class="dropdown-item" href="#">8</a>
                    <a class="dropdown-item" href="#">9</a>
                    <a class="dropdown-item" href="#">10</a>
                </div>    
            </div>
            <br>
          <!--Jeg er ikke helt sikker på hvordan I vil have boxen med den udregnet/generated value, men har bare lavet en U med value indeni, som symbolisere det for nu-->
    <p><I>Udreget afkast = <U>Some generated value pr. kontrakt , - eller totalt?</U></I></p> <br>
    
    <!--Kontraktbrud, her skal der generes 3 valgmuligheder, hvor man afkrydser en og denne vil være gældende for konsekvensen der skal ske, når der sker et kontraktbrud-->
    <p><strong>KONTRAKTBRUD</strong></p>
        <p><I>Vælg en af følgende konsekvenser ved kontraktbrud</I></p>
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
    <!--Her skrive rjeg en tekst, den skal deles i to afsnist, deraf <br>, dernæst vælger jeg at skrive at kontrakten bliver gemt til mine aftaler, denne har jeg gjort til en knap med button, understreget med U og kursiv med I og til slut sluttes paragraffen med en </p>-->    
    <br><br><p><I>"Underskriv og gem", her sendes kontrakten ud, så en vilkårlig kan underskrive og indgå i en juridisk bindende kontrakt. 
    <br> "Gem låneaftale", så gemmes den under din profil --> <button type="button" href="mineaftaler.php" target="_blank"><U> mine aftaler</U></button></I></p>        
    <!--Her kodes de to knapper i bunden, som skal føre til enten en siden hvor man underskriver eller sende kontrakten til mine aftaler under min profil, hvor den står som oprettede kontrakter-->
            <a href="underskrivoggem.php" target="_blank"><button type="button" class="btn btn-light">Underskriv og gem</button></a>
        
            <!-- Den anden knap -->
            <a href="kontrakt.php" target="_blank"><button type="button" class="btn btn-light">Gem låneaftale</button></a> 
            
            
<!--De to slut div, der afslutter containeren for hvad der skulle vises ved tryk på knappen og den sidste der afslutter selve containeren, der også indeholder knappen der skal trykkes på-->
</div>
</div>

<?php
    //require_once('includes/footer.php');
?>