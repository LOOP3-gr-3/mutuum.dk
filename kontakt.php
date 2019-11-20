<!-- her henter jeg headeren ned -->
<?php
    $page = ('Forside');
    require_once('includes/header.php');
    
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>

<div id="site'highlights" style="text-align:center">
    <hr>
        <h1><strong>Kontakt os</strong></h1>
    <hr>
</div>
<div id="vorescontainer">
    <strong>CVR nr:</strong> 12345678 <br>
    <strong>Adresse:</strong> Birk Centerpark 15 <br>
    <strong>E-mail:</strong> mutuum@hotmail.com
</div> 

<?php
require_once('includes/footer.php');
?>
