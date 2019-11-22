<!-- her henter jeg headeren ned -->
<?php
    $page = ('Mine aftaler');
    require_once('includes/header.php');

  if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
        echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
  }
?>
<!--Her hentes alle data fra databasen ind, så det kan indsættes i det forskellige tabeller. Der er benyttet natural join ved laantager_underskrift_id og laangiver_underskrift_id for at siden kan registrere hvem der har skrevet under?-->


<div id="site'highlights" style="text-align:center">
    <hr>
        <h1><strong>Mine Aftaler</strong></h1>
    <hr>
</div>
<div id="om-os-container">
<I id="xlille">På denne side finder ud alle dine kontrakter til udlån, oprettede kontrakter og historik over alle underskrevne aftaler</I><br><br>

<!-- billede af lup ved søgefeltet-->
<img id="Xlup" src="images/s%C3%B8gefunktion.PNG" alt="lup til søgefelt" title="søgefelt"> 

<!-- her laves feltet og placeholder, der skal føre til "databasen" over aftaler for brugere-->
<form action="søgefunktion.php">
    <input type="text" name="mail på bruger" placeholder="søg aftale efter mail"></form>


<!--HER KOMMER DER PHP, da der skal hentes data fra databasen ind i tabellen-->
<?php
$user_id = $_SESSION['user_id'];
    $query1 = "SELECT * FROM kontrakt WHERE laangiver_underskrift_id = '2'";
            $result1 = mysqli_query($con, $query1);
            if($result1){
            while($row1 = $result1->fetch_assoc()){
                    $dato_laangiver = $row1["reg_underskrift_1"]; /*denne skal hente tiden ind for hvornår långiver har underskrevet kontrakten*/
                    $beloebID = $row1["beloeb_id"];
            
            /*Her siger jeg at jeg vil have hentet beløbet til beloeb_id*/
                $query11 = "SELECT * FROM beloeb WHERE beloeb_id = '$beloebID'";
                $result11 = mysqli_query($con, $query11);
                $row11 = mysqli_fetch_assoc($result11);
                $beloebValue = $row11['beloeb'];
            }
        }
?>
                        
<br> 
<h5>Kontrakter klar til udlån</h5>
<!--Her samles alt der skal i tabellen i en samlet container med ID-->
<container id="xkontraktertiludlån"> 

<!-- #nbsp er skrevet ind for boxen bliver fixeret til at være den givne størrelse uden at skulle benytte row and colums-->
        
<table>
    <tr>
        <th id="Xdato">Dato for oprettelse&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th id="Xbeløb">Beløb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
    <!-- nedenstående er felterne der udfyldes når man indgår en aftale, så den bliver en del af historikken. Se forhåndsvisning for at se hvordan det hænger sammen. td = indhold til kolonner, th overskrift til kolonner og tr angiver ny "linje" -->
        <tr> 
            
            <!-- de nedenstående er bare for at vise hvordan det kommer ind i tabellen-->
            <td><?php echo $dato_laangiver; ?></td>
            <td><?php echo $beloebValue; ?> , -</td>
        </tr>
    </table>
    
</container>
<?php
           
$query2 = "SELECT * FROM kontrakt WHERE laangiver_user_id ='$user_id'";
        $result2 = mysqli_query($con, $query2);
        if($result2) {
        while ($row2 = mysqli_fetch_assoc($result2)){
            $opret_dato = $row2["reg_underskrift_1"];
            $beloebID = $row2["beloeb_id"];
               
               }}
?>

<br>
<h5>Oprettede kontrakter</h5>
<!--Her samles alt der skal i tabellen i en samlet container med ID-->
<container id="xoprettedekontrakter"> 

<!-- #nbsp er skrevet ind for boxen bliver fixeret til at være den givne størrelse uden at skulle benytte row and colums-->
<table>
    <tr>
        <th id="Xdato">Dato for oprettelse &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th id="Xbeløb">Beløb &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
    </tr>
    <!-- nedenstående er felterne der udfyldes når man indgår en aftale, så den bliver en del af historikken. Se forhåndsvisning for at se hvordan det hænger sammen. td = indhold til kolonner, th overskrift til kolonner og tr angiver ny "linje" -->
        <tr> 
            
            <!-- de nedenstående er bare for at vise hvordan det kommer ind i tabellen-->
            <td><?php echo $opret_dato; ?> </td>
            <td><?php echo $beloebValue; ?>, -</td>
        </tr>
    </table>

</container>

<br>
<h3>Historik</h3>

<?php
$query3 = "SELECT * FROM kontrakt NATURAL JOIN users WHERE laangiver_user_id ='$user_id'";
    $result3 = mysqli_query($con, $query3);
if($result3){
        while($row3 = $result3->fetch_assoc()){
        $laantager_mail = $row3["mail"];
        $dato_underskrift2 = $row3["reg_underskrift_2"];
        $laantagerGetMail = $row3["laantager_user_id"];
        }}
            

        
?>

<!--Her samles alt der skal i tabellen i en samlet container med ID´et "aftalehistorik"-->
<container id="aftalehistorik"> 

<!-- #nbsp er skrevet ind for boxen bliver fixeret til at være den givne størrelse uden at skulle benytte row and colums-->
<table>
    <tr>
        <th id="Xdato">Dato &nbsp;&nbsp;&nbsp; </th>
        <th id="Xmail">Mail &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
        <th id="Xbeløb">Beløb &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; </th>
    </tr>
    <!-- nedenstående er felterne der udfyldes når man indgår en aftale, så den bliver en del af historikken. Se forhåndsvisning for at se hvordan det hænger sammen. td = indhold til kolonner, th overskrift til kolonner og tr angiver ny "linje" -->
        <tr>
            <?php
            
          $query4 = "SELECT * FROM users WHERE user_id = '$laantagerGetMail'";
                $result4 = mysqli_query($con, $query4);
                    while($row4 = $result4->fetch_assoc()){
                    $laantagermail = $row4['mail'];
                    
                    }    ?>
            
            <td><?php echo $dato_underskrift2; ?></td>
            <td><?php echo $laantagermail; ?> </td>
            <td><?php echo $beloebValue; ?>, -</td>
        </tr>
    </table>
    
</container>

</div>

<?php
require_once('includes/footer.php');
?>