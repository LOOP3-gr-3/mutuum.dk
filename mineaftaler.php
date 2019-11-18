<!-- her henter jeg headeren ned -->
<?php
    $page = ('Mine aftaler');
    require_once('includes/header.php');
    //require_once('includes/footer.php');
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>

<h2>MINE AFTALER</h2>
<I id="xlille">På denne side finder ud alle dine kontrakter til udlån, oprettede kontrakter og historik over alle underskrevne aftaler</I><br><br>

<!-- billede af lup ved søgefeltet-->
<img id="Xlup" src="images/s%C3%B8gefunktion.PNG" alt="lup til søgefelt" title="søgefelt"> 

<!-- her laves feltet og placeholder, der skal føre til "databasen" over aftaler for brugere-->
<form action="søgefunktion.php">
    <input type="text" name="mail på bruger" placeholder="søg aftale efter mail"></form>

<br> 
<h5>Kontrakter til udlån</h5>
<!--Her samles alt der skal i tabellen i en samlet container med ID-->
<container id="xkontraktertiludlån"> 

<!-- #nbsp er skrevet ind for boxen bliver fixeret til at være den givne størrelse uden at skulle benytte row and colums-->
<table>
    <tr>
        <th id="Xdato">Dato for oprettelse &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th id="Xbeløb">Beløb &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </th>
    </tr>
    <!-- nedenstående er felterne der udfyldes når man indgår en aftale, så den bliver en del af historikken. Se forhåndsvisning for at se hvordan det hænger sammen. td = indhold til kolonner, th overskrift til kolonner og tr angiver ny "linje" -->
        <tr> 
            
            <!-- de nedenstående er bare for at vise hvordan det kommer ind i tabellen-->
            <td>18/11-19</td>
            <td>4059, -</td>
        </tr>
        <tr>
            <td>21/11-19</td>
            <td>5313, -</td>
        </tr>
    </table>
    
</container>

<br>
<h5>Oprettede kontrakter</h5>
<!--Her samles alt der skal i tabellen i en samlet container med ID-->
<container id="xoprettedekontrakter"> 

<!-- #nbsp er skrevet ind for boxen bliver fixeret til at være den givne størrelse uden at skulle benytte row and colums-->
<table>
    <tr>
        <th id="Xdato">Dato &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th id="Xbeløb">Beløb &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </th>
    </tr>
    <!-- nedenstående er felterne der udfyldes når man indgår en aftale, så den bliver en del af historikken. Se forhåndsvisning for at se hvordan det hænger sammen. td = indhold til kolonner, th overskrift til kolonner og tr angiver ny "linje" -->
        <tr> 
            
            <!-- de nedenstående er bare for at vise hvordan det kommer ind i tabellen-->
            <td>18/11-19</td>
            <td>5000, -</td>
        </tr>
        <tr>
            <td>21/11-19</td>
            <td>2000, -</td>
        </tr>
    </table>
    
</container>

<br>

<h3>Historik</h3>

<!--Her samles alt der skal i tabellen i en samlet container med ID´et "aftalehistorik"-->
<container id="aftalehistorik"> 

<!-- #nbsp er skrevet ind for boxen bliver fixeret til at være den givne størrelse uden at skulle benytte row and colums-->
<table>
    <tr>
        <th id="Xdato">Dato &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th id="Xmail">Mail &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th id="Xbeløb">Beløb &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </th>
    </tr>
    <!-- nedenstående er felterne der udfyldes når man indgår en aftale, så den bliver en del af historikken. Se forhåndsvisning for at se hvordan det hænger sammen. td = indhold til kolonner, th overskrift til kolonner og tr angiver ny "linje" -->
        <tr> 
            
            <!-- de nedenstående er bare for at vise hvordan det kommer ind i tabellen-->
            <td>18/11-19</td>
            <td>xiastald@hotmail.com</td>
            <td>5000, -</td>
        </tr>
        <tr>
            <td>21/11-19</td>
            <td>wasfeyah.hashemi@hotmail.com</td>
            <td>2000, -</td>
        </tr>
    </table>
    
</container>
