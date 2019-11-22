<!-- her henter jeg headeren ned -->
<?php
    $page = ('Ret Oplysninger');
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
        <h1><strong>Ret Oplysninger</strong></h1>
    <hr>
</div>

<div id="vorescontainer">
<p><I>Denne side vil der blive arbejdet videre på til loop</I></p>
</div> 

<?php
require_once('includes/footer.php');
?>