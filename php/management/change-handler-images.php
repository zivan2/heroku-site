<?php
    $conn = mysqli_connect("localhost", "root", "", "image_upload");

    $titleChange = $_POST['titleChange'];
    $descriptionChange = $_POST['descriptionChange'];
    $imageName = $_POST['imageName'];
    $oldHTML = str_replace("\\", "", $_POST['oldHTML']);
    $index = $_POST['index'];

    $getQuery = "SELECT image_name, image_text FROM images WHERE image='$imageName'";
    $getResult = mysqli_query($conn, $getQuery);


    if ($_POST['titleChangeSet'] == "true") {
        $query = "UPDATE images SET image_name='$titleChange' WHERE image='$imageName'";
        mysqli_query($conn, $query);

        $getResult = mysqli_query($conn, $getQuery);
        $row = mysqli_fetch_array($getResult, MYSQLI_ASSOC);

        echo 
        "<div id=\"image-info-" . $index . "\">
            <h3>Image info</h3>
            <b>Image file name:</b>&nbsp\"" . $imageName . "\"</br>
            <b>Image title:</b>&nbsp\"" . $row['image_name'] . "\"</br>
            <b>Image description:</b>&nbsp\"" . $row['image_text'] . "\"</br></br>
        </div>

        <div id=\"image-container-". $index . "\">
            <a href=\"javascript:imageHideShow()\">[hide image]</a></br>
            <div id=\"image-container-\"" . $index . ">
                <img name=\"" . $imageName . "\" src=\"images/" . $imageName . "\" id=\"image-" . $index . "\">
            </div>
        </div>
        <hr>

        <div id=\"image-other-" . $index . "\">"
            .$oldHTML
        ."</div>";
    }

    if ($_POST['descriptionChangeSet'] == "true") {
        $query = "UPDATE images SET image_text='$descriptionChange' WHERE image='$imageName'";
        mysqli_query($conn, $query);

        $getResult = mysqli_query($conn, $getQuery);
        $row = mysqli_fetch_array($getResult, MYSQLI_ASSOC);

        echo 
        "<div id=\"image-info" . $index . "\">
            <h3>Image info</h3>
            <b>Image file name:</b>&nbsp\"" . $imageName . "\"</br>
            <b>Image title:</b>&nbsp\"" . $row['image_name'] . "\"</br>
            <b>Image description:</b>&nbsp\"" . $row['image_text'] . "\"</br></br>
        </div>

        <div id=\"image-container-". $index . "\">
            <a href=\"javascript:imageHideShow()\">[hide image]</a></br>
            <div id=\"image-container-\"" . $index . ">
                <img name=\"" . $imageName . "\" src=\"images/" . $imageName . "\" id=\"image-" . $index . "\">
            </div>
        </div>
        <hr>
        
        <div id=\"image-other" . $index . "\">"
            .$oldHTML
        ."</div>";
    }

    if ($_POST['delete'] == "true") {
        $query = "DELETE FROM images WHERE image='$imageName'";
        mysqli_query($conn, $query);
        unlink("../../images/" . $imageName);
        echo "<p class=\"empty-message\">Image has been deleted.</p>";
    }
?>