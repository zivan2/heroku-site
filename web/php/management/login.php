<?php
    if (isset($_POST['submit'])) {if ($_POST['password'] == "admin") {
        
        session_start();
        $_SESSION['user'] = "admin";

        header("Location: ../../admin.php");

    } else {echo "Incorrect password.";}}
?>