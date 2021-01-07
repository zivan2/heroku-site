<link rel="stylesheet" href="styles/header-style.css">
<div class="grid header topnav">
    <a href="index.php">Welcome to KCC</a>
    <span class="empty">&nbsp</span>
    <a class="" href="index.php" id="Home">Home</a>
    <a class="" href="form.php" id="Add">Add content</a>
    <a class="" href="leaderboard.php" id="Leaderboard">Leaderboard</a>
    <?php
        session_start();
        
        // If admin is logged in
        if ($_SESSION) {if ($_SESSION['user'] == "admin") {
            echo "<a class=\"\" href=\"admin.php\" id=\"Admin\">Admin</a><a class=\"\" href=\"runphp-page.php\" id=\"Run\">Run hack.exe</a>";
        }} else {
            echo "<a class=\"\" href=\"login-page.php\" id=\"Login\">Login</a>";
        }
    ?>
</div>