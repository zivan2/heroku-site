<?php
    if (isset($_POST['submit'])) {
        $conn = mysqli_connect("localhost", "root", "", "reports");
        
        $name = $_POST['name'];
        $reason = $_POST['reason'];
        $imageName = $_GET['imageName'];

        $query = "INSERT into `$imageName` (`name`, `reason`) VALUES (`$name`, `$reason`)";
        mysqli_query($conn, $query);

        mysqli_close($conn);
    }
?>