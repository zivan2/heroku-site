<?php
    if (isset($_POST['submit'])) {
        if ($_POST['text'] == "hello123") {
            header("Location: runphp.php");
            echo "123";
        } else {
            echo "ERROR";
        }
    }
?>