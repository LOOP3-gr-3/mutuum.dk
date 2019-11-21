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
        $kontrakt_id = $row["kontrakt_id"];
        $laangiver_user_id = $row["laangiver_user_id"];
        $laantager_user_id= $row["laantager_user_id"];
        $kredit_id = $row["kredit_id"];
        $kontraktbrud_id = $row["kontraktbrud_id"];
        $rente_id = $row["rente_id"];
        $beloeb_id = $row["beloeb_id"];
        $bindingsperiode_id = $row["bindingsperiode_id"];    
        $maanedlig_afdrag = $row["maanedlig_afdrag"];    
        $laangiver_underskrift_id = $row["laangiver_underskrift_id"];    
        $reg_underskrift_1 = $row["reg_underskrift_1"];
        $laantager_underskrift_id = $row["laantager_underskrift_id"];    
        $reg_underskrift_2 = $row["reg_underskrift_2"];
        $betalings_status_id = $row["betalings_status_id"];
            

        echo '<tr>
                    <td>'.$kontrakt_id.'</td>
                    <td>'.$laangiver_user_id.'</td>
                    <td>'.$laantager_user_id.'</td>
                    <td>'.$kredit_id.'</td>
                    <td>'.$kontraktbrud_id.'</td>
                    <td>'.$rente_id.'</td>
                    <td>'.$beloeb_id.'</td>
                    <td>'.$bindingsperiode_id.'</td>
                    <td>'.$maanedlig_afdrag.'</td>
                    <td>'.$laangiver_underskrift_id.'</td>
                    <td>'.$reg_underskrift_1.'</td>
                    <td>'.$laantager_underskrift_id.'</td>
                    <td>'.$reg_underskrift_2.'</td>
                    <td>'.$betalings_status_id.'</td>
            </tr><br>';
        }
}
?>


<div>
    <h3 style=text-align:center><strong>Kontraktanmodningerer på markedet</strong></h3>
</div>


<?php 

$kredit_id = "SELECT kredit_id FROM users WHERE user_id = '$user_id'";


$query1 = "SELECT * FROM kontrakt WHERE kredit_id ='$kredit_id'";
$result1 = mysqli_query($con, $query1);
    if($result1){
        while($row1 = $result1->fetch_assoc()){
        $kontrakt_id = $row1["kontrakt_id"];
        $laangiver_user_id = $row1["laangiver_user_id"];
        $laantager_user_id= $row1["laantager_user_id"];
        $kredit_id = $row1["kredit_id"];
        $kontraktbrud_id = $row1["kontraktbrud_id"];
        $rente_id = $row1["rente_id"];
        $beloeb_id = $row1["beloeb_id"];
        $bindingsperiode_id = $row1["bindingsperiode_id"];    
        $maanedlig_afdrag = $row1["maanedlig_afdrag"];    
        $laangiver_underskrift_id = $row1["laangiver_underskrift_id"];    
        $reg_underskrift_1 = $row1["reg_underskrift_1"];
        $laantager_underskrift_id = $row1["laantager_underskrift_id"];    
        $reg_underskrift_2 = $row1["reg_underskrift_2"];
        $betalings_status_id = $row1["betalings_status_id"];
                    

        echo '<tr>
                    <td>'.$kontrakt_id.'</td>
                    <td>'.$laangiver_user_id.'</td>
                    <td>'.$laantager_user_id.'</td>
                    <td>'.$kredit_id.'</td>
                    <td>'.$kontraktbrud_id.'</td>
                    <td>'.$rente_id.'</td>
                    <td>'.$beloeb_id.'</td>
                    <td>'.$bindingsperiode_id.'</td>
                    <td>'.$maanedlig_afdrag.'</td>
                    <td>'.$laangiver_underskrift_id.'</td>
                    <td>'.$reg_underskrift_1.'</td>
                    <td>'.$laantager_underskrift_id.'</td>
                    <td>'.$reg_underskrift_2.'</td>
                    <td>'.$betalings_status_id.'</td>
            </tr><br>';
        }
}
?>

<?php
require_once('includes/footer.php');
?>
