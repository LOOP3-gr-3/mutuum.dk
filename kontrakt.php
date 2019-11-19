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
  <h2>Simple Collapsible</h2>
  <p>Click on the button to toggle between showing and hiding content.</p>
  <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
  <div id="demo" class="collapse">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </div>
</div>


<button onclick="myFunction()" id="xnetveark"> Låneaftale via netværk</button>
    <span id="more">
        <form>
        <input type="text" name="Beløb" placeholder="Beløb"></form>
    </span>



<button id="xmatchside">Låneaftale via Matchsiden</button>

<?php
    require_once('includes/footer.php');
?>