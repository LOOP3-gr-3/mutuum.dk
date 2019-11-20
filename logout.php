<?php
require_once('includes/header.php');
session_destroy();
if (isset($_SESSION['user_id'])) {
?>

<div class="container">
    <p class='intro winter t15'>Du er nu logget ud. <I><a href="forside.php">Klik her og til forsiden.</a></I></p>
</div>

<?php
}
require_once('includes/footer.php');
?>
