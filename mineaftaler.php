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

<!-- INDSÆT SØGEFELT-->

<I>Din oversigt over alle aftaler</I><br><br>

<h3>Historik</h3>

<!--Her samles alt der skal i tabellen i en samlet container med ID´et "aftalehistorik"-->
<container id="aftalehistorik"> 

<!-- #nbsp er skrevet ind for boxen bliver fixeret til at være den givne størrelse uden at skulle benytte row and colums-->
<table>
    <tr>
        <th id="Xdato">Dato &nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th id="Xmail">Mail &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th id="Xbeløb">Beløb &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </th>
    </tr>
    <!-- nedenstående er felterne der udfyldes når man indgår en aftale, så den bliver en del af historikken. Se forhåndsvisning for at se hvordan det hænger sammen. td = indhold til kolonner, th overskrift til kolonner og tr angiver ny "linje" -->
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    
</container>
