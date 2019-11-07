<?php 
$page = 'MinSide';
require_once('includes/header.php');

//Her får jeg php til at tjekke op på om brugeren er logget ind
if (isset($_SESSION['user_id'])) {
    header('location:loggedin_front.php');
 
//ellers skal den tjekke på mail og password
} else {
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE email = '$email'";

//Her tjekker den kun for mailadressen, da password skal sammmenholdes med det hashed password. Her skrives der, at hvis mailen ikke matcher en i databasen, så skal der komme en error melding 
        $result = mysqli_query($con, $query);
        if(!$result) die(mysqli_error($con));
    
//Hvis ikke det er rigtige login så kommer der en else. Rows er hvor mange rækker der er isystemet, row er til hvilken af de rows. 
        else {
            $rows = mysqli_num_rows($result);

//Hvis en query har flere end en row, så vil den returnere et nummer. Hvis mailen ikke eksistere, skal siden kunne skrive det. Derfor kommer der en conditional statement som følgende
            if($rows == 0) {
                echo "Du skal logge ind eller oprette en bruger, for at se 'min side'";
            }
 //Hvis emailen eksistere så skal der være en else statement
            else {
                if ($rows > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $email = $row['email'];
                        $database_password = $row['password'];
                        $user_id = $row['user_id'];
                        $token = password_verify('$password', '$database_password'); //Token skal være under den række hvor man tilkalder password. $ declare a variable
            //det overstående statement fortæller siden Dan en ny variable som indeholder email, password og user id
            // hash er php metode 
            //values skal ALTID have single quotation '' 
            //$hash = password_hash('value', PASSWORD_DEFAULT)
            //$verfify = password_verify ('value', 'hash')
                        if ($token == $password) {
                
                    //Den nedesåtende kode sikre at brugeren ikke skal logge ind på hver eneste side, men at brugeren bare er logget ind på andre sessioner
                            $_SESSION['user_id'] = $user_id;
                            echo "Welcome" . $email;
                            
                            
                        }
                        
                    }
                }
            }
        }
    }  
}


//if the user is logged in, redirects to the page loggedin_front.php
//if the user is not logged in performs the necessary queries to compare the credentials against the table users. 
// use password_verify(plain text password, database hashed password) to create a token to compare against the database.

?>


<!-- Følgende er lavet vha. Bootstrap, hvor billederne bliver stilllet i Bootstraps grid system -->
<!-- Ikonerne er fra Word Documents 2016 -->
<div class="row">
  <div class="col-mew"> 
      <a href="minprofil.php"><img src="images/profil.png" alt="MinProfil" style="width:90%"></a>
    </div>
  <div class="col-mew">
      <a href="#KONTRAKT"><img src="images/kontrakt.png" alt="Opret kontrakt" style="width:90%" style="center"></a>
    </div>
    <div class="col-lille"></div>
</div>
<div class="row">
 <div class="col-mew"> 
      <a href="#MATCH"><img src="images/match.png" alt="Matchsiden" style="width:90%"></a>
    </div>
  <div class="col-mew">
      <a href="#NETVÆRK"><img src="images/netvaerk.png" alt="Netværk" style="width:90%"></a>
    </div>
</div> 
<div class="row">
 <div class="col-mew"> 
      <a href="#OVERBLIK"><img src="images/graf.png" alt="Matchsiden" style="width:90%"></a>
    </div>


</body>
</html>
     