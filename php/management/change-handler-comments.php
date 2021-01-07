<?php
    $conn = mysqli_connect("localhost", "root", "", "comments");

    $imageName = $_POST['imageName'];
    $commentId = $_POST['commentId'];
    $indexImage = $_POST['indexImage'];
    $indexComment = $_POST['indexComment'];

    $query = "DELETE FROM `$imageName` WHERE id=$commentId";
    mysqli_query($conn, $query);

    echo "<p class=\"empty-message\">Comment has been deleted.</p>";
?>