<!-- her henter jeg headeren ned -->
<?php
    $page = ('Mine aftaler');
    require_once('includes/header.php');
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>

<h1 id="xopretudlan">OPRET UDLÅN</h1>

<p id="xx"><I>Her vælger du hvor kontrakten skal sendes hen, til en vilkårlig bruger eller til en i dit netværk</I></p><br>

<!-- her laves funktionen der skal få den bestemte kontrakt til at blive vist-->

<div class="container">
    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="netveark" id="xnetveark">Låneftale via netværk</button>
    
        <div id="netveark" class="collapse">
            <span id="more">
            <form>
            <input type="text" name="Beløb" placeholder="Beløb"></form>
            </span>
        </div>
</div>

<div class="container">
    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="matchside" id="xmatchside">Låneftale til vilkårlig</button>
    
        <div id="matchside" class="collapse">
            <span id="more">
            <form>
            <input type="text" name="Beløb" placeholder="Beløb"></form>
            </span>
        </div>
</div>

<?php
    require_once('includes/footer.php');
?>