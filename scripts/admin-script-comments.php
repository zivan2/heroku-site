<?php
// Comment change button handlers
    $commentButtonHandlers = "";
    for ($j = 0; $j < $entryCount; $j++) {
        if ($commentEntryCount[$j] > 0) {
            for ($i = 1; $i <= $commentEntryCount[$j]; $i++) {
                $commentButtonHandlers = $commentButtonHandlers
                ."$(\"#delete-comment-" . $i . "-" . $j . "\").click(function() {
                    "
                    /* If user confirms deletion */
                    ."if (confirm(\"Are you sure you want to delete this comment?\")) {"
                        /* Get name of the comment's parent image */
                        ."var imageNameElement = document.getElementById(\"image-" . $i . "\");
                        var imageNamePass = imageNameElement.getAttribute(\"name\");
                        "

                        /* Get id of the comment */
                        ."var commentIdElement = document.getElementById(\"comment-single-" . $i . "\");
                        var commentIdPass = commentIdElement.getAttribute(\"name\");
                        "
        
                        /* Load data into change handler script */
                        ."$(\"#comment-single-" . $i . "\").load(\"php/management/change-handler-comments.php\", {
                            delete: \"true\",
                            imageName: imageNamePass,
                            commentId: commentIdPass,
                            indexImage: " . $i . ",
                            indexComment: " . $j
                        ."});
                    }
                });";
            }
        }
    }
?>