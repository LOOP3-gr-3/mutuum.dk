<!-- her henter jeg headeren ned -->
<?php
    $page = ('Mine aftaler');
    require_once('includes/header.php');
    require_once('includes/footer.php');
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>

<h1 id="xopretudlan">OPRET UDLÅN</h1>


<container id="xbutton">
    <button>Låneaftale via netværk</button><button>Låneaftale via Matchsiden</button>
</container>
