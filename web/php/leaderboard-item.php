<?php
    $conn = mysqli_connect("localhost", "root", "", "image_upload");
    $connComments = mysqli_connect("localhost", "root", "", "comments");

    $query = "SELECT image, image_name, image_text FROM images ORDER BY score DESC";
    $result = mysqli_query($conn, $query);

    $i = 1;
    $entryCount = 0;

    // Echo leaderboard items
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $currentImageName = $row['image'];
        $currentImageTitle = $row['image_name'];
        $currentImageText = $row['image_text'];
        $entryCount++;

        // If this is the first leaderboard item, then set the extension of the class to "-top"
        $topContainerClass;
        if ($i == 1) {
            $topContainerClass = "-top";
        } else {
            $topContainerClass = "";
        }

        echo 

        /* Outer div */
        "<div class=\"single-item-container" /* Will append "-top" if this is the first item */ . $topContainerClass . "\" name=\"" . $currentImageName ."\" id=\"image-name-rank-" . $i . "\">"

            /* Number div */
            ."<div class=\"number\">
                #" . $i
            ."</div>" 

            /* Name and info div */
            ."<div class=\"title-description\">
                <h1>" . $currentImageTitle . "</h1> </br>
                <p>" . $currentImageText . "</p>
            </div>"

            /* Image div */
            ."<div>
                <img id=\"image-rank-" . $i . "\" src=\"images\\" . $currentImageName . "\" alt=\"Unknown error\" class=\"image-leaderboard\">
            </div>"

            /* Comments outer div */
            ."<div class=\"comments\">"

                /* Comments to display outer div */
                ."<div class=\"comments-display\" id=\"comments-display-" . $i . "\">";
                
                    $commentQuery = "SELECT `comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm` FROM `$currentImageName` ORDER BY `id` DESC";
                    $commentResult = mysqli_query($connComments, $commentQuery);
                    $j = false;
                    
                    // If there are comments
                    if ($commentResult) {
                        // Echo comments
                        while ($rowComments = mysqli_fetch_array($commentResult, MYSQLI_ASSOC)) {
                            $j = true;

                            echo 
                            "<div class=\"comment-single\">
                                <b class=\"comment-title\">" . $rowComments['comment_name'] . "</b></br>
                                <p class=\"comment-info\">Submitted at " . $rowComments['comment_time'] . $rowComments['time_ampm'] . " on " . $rowComments['comment_date'] . " to " . $currentImageName . ".</p>
                                <p class=\"comment-text\">" . $rowComments['comment_text'] . "</p>
                            </div>";
                        }
                    }
                
                    // If no comments exist
                    if (!$j) {
                        echo "<p class=\"empty-message\">No comments. Be the first one to comment!</p>";
                    }

                    echo
                    
                "</div>"

                /* Post comments div */
                ."<div class=\"comments-post\">
                    <textarea class=\"comments-post-text\" id=\"text-" . $i . "\"></textarea></br>
                    Display name:&nbsp<input class=\"comments-post-name\" type=\"text\" id=\"name-" . $i . "\"></br>
                    <button class=\"comments-post-button\" id=\"submit-" . $i . "\"> Post Comment </button>
                </div>
            </div>
        </div>";
        
        $i++;
    }
?>