<!-- her henter jeg headeren ned -->
<?php
    $page = ('Mine aftaler');
    require_once('includes/header.php');
    //require_once('includes/footer.php');
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>

<h2>OPRET UDLÅN</h2>
