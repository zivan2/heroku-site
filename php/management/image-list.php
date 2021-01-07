<?php
    $conn = mysqli_connect("localhost", "root", "", "image_upload");
    $connComments = mysqli_connect("localhost", "root", "", "comments");

    $queryInm = "SELECT image, image_name, image_text FROM images ORDER BY score DESC";
    $resultInm = mysqli_query($conn, $queryInm);
    $query = "SELECT image, image_name, image_text FROM images ORDER BY score DESC";
    $result = mysqli_query($conn, $query);

    $i = 1;
    $entryCount = 0;

    // Determine entryCount
    while ($row = mysqli_fetch_array($resultInm, MYSQLI_ASSOC)) {
        $entryCount++;
    }

    $commentEntryCount = array_fill(0, $entryCount, 0);


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $currentImageName = $row['image'];
        $currentImageTitle = $row['image_name'];
        $currentImageText = $row['image_text'];

        echo 
        "<div class=\"image-outer\" id=\"image-outer-" . $i . "\">"
            /* Image info */
            ."<div id=\"image-info-" . $i . "\">
                <h3>Image info</h3>
                <b>Image file name:</b>&nbsp\"" . $currentImageName . "\"</br>
                <b>Image title:</b>&nbsp\"" . $currentImageTitle . "\"</br>
                <b>Image description:</b>&nbsp\"" . $currentImageText . "\"</br></br>
            </div>"
            
            
            /* Image */
            ."<div id=\"image-container-". $i . "\">
                <a id=\"image-hide-link-" . $i . "\" href=\"javascript:imageHideShow(" . $i . ")\">[hide image]</a></br>
                <div id=\"image-hide-replacement-" . $i . "\"></div>
                <div id=\"image-container-\"" . $i . ">
                    <img name=\"" . $currentImageName . "\" src=\"images/" . $currentImageName . "\" id=\"image-" . $i . "\">
                </div>
            </div>
            <hr>"
                
            ."<div id=\"image-other-" . $i . "\">"
                /* Image options */
                ."<div>
                    <h3>Image options</h3>
                    Change image title:&nbsp<input type=\"text\" id=\"change-title-" . $i . "\">&nbsp<button id=\"change-title-button-" . $i . "\">Change title</button></br></br>
                    Change image description:&nbsp</br><textarea id=\"change-description-" . $i . "\"></textarea>&nbsp<button id=\"change-description-button-" . $i . "\">Change description</button></br></br>
                    <button class=\"delete\" id=\"delete-" . $i . "\">Delete image</button>
                </div>
                <hr>"

                /* Comments! */
                ."<h3>Comment options</h3></br>
                <a id=\"comment-hide-link-" . $i . "\" href=\"javascript:commentHideShow(" . $i . ")\">[show comments]</a></br>
                <div id=\"comment-hide-replacement-". $i . "\">...</div>
                <div style=\"display: none;\" id=\"comment-container-" . $i . "\">";

                    $commentQuery = "SELECT `id`, `comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm` FROM `$currentImageName` ORDER BY `id` DESC";
                    $commentResult = mysqli_query($connComments, $commentQuery);
                    $j = false;

                    $k = 0;
                    
                    // If there are comments
                    if ($commentResult) {
                        // Echo comments
                        while ($rowComments = mysqli_fetch_array($commentResult, MYSQLI_ASSOC)) {
                            $j = true;
                            $k++;

                            echo 
                            "<div name=\"" . $rowComments['id'] . "\" id=\"comment-single-" . $i . "\" class=\"comment-single\">
                                <b class=\"comment-title\">" . $rowComments['comment_name'] . "</b></br>
                                <p class=\"comment-info\">Submitted at " . $rowComments['comment_time'] . $rowComments['time_ampm'] . " on " . $rowComments['comment_date'] . " to " . $currentImageName . ".</p>
                                <p class=\"comment-text\">" . $rowComments['comment_text'] . "</p></br>
                                <button class=\"delete-comment\" id=\"delete-comment-". $i . "-" . $k . "\">Delete comment</button>
                            </div>";
                            $commentEntryCount[$i - 1]++;
                        }
                    }

                
                    // If no comments exist
                    if (!$j) {
                        echo "<p class=\"empty-message\">No comments exist for this image.</p>";
                    }
                    
                    echo 
                "</div>
            </div>
        </div>";
        $i++;
    }
?>