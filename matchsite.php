<?php  
$page = 'MinSide';
require_once('includes/header.php');
  if (!isset($_SESSION['user_id'])) {
        echo '<script>alert("Du er ikke logget ind på MUTUUM - log ind her, eller opret en bruger og få gratis adgang til platformen!");';
       echo 'window.location.href="login.php";';
        echo '</script>' ;
        die();
} 
?>


<div id="site'highlights" style="text-align:center">
    <hr>
    <h1><strong>Matchsite</strong></h1>
    <hr>
</div>

<div>
    <h3 style=text-align:center><strong>Kontraktanmodningerer sendt til DIG</strong></h2>
</div>

<?php

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM kontrakt WHERE laantager_user_id ='$user_id'";
   $result = mysqli_query($con, $query);
if($result){
        while($row = $result->fetch_assoc()){
        $laangiver_user_id = $row["laangiver_user_id"];
        $laantager_user_id= $row["laantager_user_id"];
        $kredit_id = $row["kredit_id"];
        $kontraktbrud_id = $row["kontraktbrud_id"];
        $rente_id = $row["rente_id"];
        $beloeb_id = $row["beloeb_id"];
        $bindingsperiode_id = $row["bindingsperiode_id"];    
        $maanedlig_afdrag = $row["maanedlig_afdrag"]; 

            
    /*        
$query1 = "SELECT * FROM users WHERE user_id ='$user_id'";
$result1 = mysqli_query($con, $query1);
if($result1){
        while($row1 = $result1->fetch_assoc()){
        $fornavn = $row1["fornavn"]; */
?>

<table>
    <tr>
        <td><?php echo $laangiver_user_id ?></td>
        <td><?php echo $laantager_user_id ?></td>
        <td><?php echo $kredit_id ?></td>
        <td><?php echo $kontraktbrud_id ?></td>
        <td><?php echo $rente_id ?></td>
        <td><?php echo $beloeb_id ?></td>
        <td><?php echo $bindingsperiode_id ?></td>
        <td><?php echo $maanedlig_afdrag ?></td>
    </tr>
</table>
<?php
        }
}
?>


<div>
    <h3 style=text-align:center><strong>Kontraktanmodningerer på markedet</strong></h3>
</div>


<?php 

$query2 = "SELECT * FROM kontrakt WHERE kredit_id ='$kredit_id'";
$result2 = mysqli_query($con, $query2);
    if($result2){
        while($row2 = $result2->fetch_assoc()){
        $kontrakt_id = $row2["kontrakt_id"];
        $laangiver_user_id = $row2["laangiver_user_id"];
        $laantager_user_id= $row2["laantager_user_id"];
        $kredit_id = $row2["kredit_id"];
        $kontraktbrud_id = $row2["kontraktbrud_id"];
        $rente_id = $row2["rente_id"];
        $beloeb_id = $row2["beloeb_id"];
        $bindingsperiode_id = $row2["bindingsperiode_id"];    
        $maanedlig_afdrag = $row2["maanedlig_afdrag"];    
        $laangiver_underskrift_id = $row2["laangiver_underskrift_id"];    
        $reg_underskrift_1 = $row2["reg_underskrift_1"];
        $laantager_underskrift_id = $row2["laantager_underskrift_id"];    
        $reg_underskrift_2 = $row2["reg_underskrift_2"];
        $betalings_status_id = $row2["betalings_status_id"];
                    
?>


<table>
    <?php 
        echo 
                    '<td>'.$laangiver_user_id.'</td>
                    <td>'.$laantager_user_id.'</td>
                    <td>'.$kredit_id.'</td>
                    <td>'.$kontraktbrud_id.'</td>
                    <td>'.$rente_id.'</td>
                    <td>'.$beloeb_id.'</td>
                    <td>'.$bindingsperiode_id.'</td>
                    <td>'.$maanedlig_afdrag.'</td>';
    ?>
</table>
<?php
        }
}
?>

<?php
require_once('includes/footer.php');
?>
