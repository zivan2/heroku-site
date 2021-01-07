<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css"  href="styles/style.css">
    <link rel="stylesheet" type="text/css" href="styles/leaderboard-style.css">
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="scripts/header.js"></script>

<?php include "php/cookie-message.php"; ?>

<html>
<!-- Leaderboard -->
    <body>
        <?php include "header.php"; ?>
        <div class="leaderboard-container">
            <?php include "php/leaderboard-item.php"; ?>
        </div>
    </body>
    <?php include "scripts/leaderboard-script.php"; ?>
    <?php displayCookieMessage($display); ?>
</html>