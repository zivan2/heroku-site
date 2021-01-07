<?php
    $connImages = mysqli_connect("localhost", "root", "", "image_upload");
    $connComments = mysqli_connect("localhost", "root", "", "comments");
    $connReports = mysqli_connect("localhost", "root", "", "reports");

    if (isset($_POST['submit'])) {if ($_POST['text'] == "hello123"){
        // php to be executed goes here
        setcookie("hello", "lv", time() + 15);
        echo "hack.exe has been run cia is now hackled</br>";

        if (!isset($_COOKIE['hello'])) {
            echo "cookie is not set";
        } else {
            echo "cookie is set";
        }
    }}
?>