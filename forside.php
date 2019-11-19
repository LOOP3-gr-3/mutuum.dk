<!-- her henter jeg headeren ned -->
<?php
    $page = ('Mine aftaler');
    require_once('includes/header.php');
    //require_once('includes/footer.php');
    if (isset($_SESSION['user_id'])) {
        header('location:forside.php');
}
?>

<link href="includes/styles/forside.css" type="text/css" rel="stylesheet">

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    
    <div id="site-highlights">
        <hr>
        <h2>Her skal vores motto være!</h2>
        <section><div id=""></div></section>
        <section><div id=""></div></section>
        <section><div id=""></div></section>
        <hr>
    </div>
    <div id="spacer"></div>
    </main>
</div>