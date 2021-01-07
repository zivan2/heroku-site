<?php
    session_start();

    if ($_SESSION) {if ($_SESSION['user'] == "admin") {
        echo 
        "<head>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"styles/admin-style.css\">
        </head>
    
    
        <h1>Admin page</h1></br>
        <hr>
        
        <h3><a href=\"php/management/logout.php\">Log out</a></h3>
        <h3><a href=\"index.php\">index.php</a></h3>
        
        
        <!-- Image manager -->
        <div>
            <h2>Manage images</h2></br>
            <a name=\"true\" id=\"hide-show-all\" href=\"javascript:imageHideShow(0)\">[hide all images]</a></br></br>";
        
            include "php/management/image-list.php";
            include "scripts/admin-script.php";
        
        echo "
        </div>";
    }} else {
        echo "<h1>Begone, filthy hacker!</h1></br><img src=\"https://i.pinimg.com/originals/27/55/e2/2755e2552ec9b75cf8297073cde42cd3.jpg\">";
    }
?>