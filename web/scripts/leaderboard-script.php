<?php
    // Echo as many submit button click handlers as there are leaderboard items
    $echoScript = "";
    for ($i = 1; $i <= $entryCount; $i++){
        $echoScript = $echoScript
        ."$(\"#submit-" . $i . "\").click(function(){"
            /* Get values from text inputs, get name of the image the comment is posted to */
            ."var textInPass = document.getElementById(\"text-" . $i . "\").value;
            var nameInPass = document.getElementById(\"name-" . $i . "\").value;"

            /* Check if the input is empy */
            ."if ((textInPass == \"\") || (nameInPass == \"\")) {
                alert(\"You must type a comment and a name to submit.\");
            } else {" /* If input is not empty, proceed */
                ."var imageNameElement = document.getElementById(\"image-name-rank-" . $i . "\");
                var imageNamePass = imageNameElement.getAttribute(\"name\");"

                /* Get the html string containing all current comments */
                ."var oldCommentsHTMLPass = addslashes(document.getElementById(\"comments-display-" . $i . "\").innerHTML);"

                /* Load new comment and add new comment to database */
                ."$(\"#comments-display-" . $i . "\").load(\"php/comment-submit.php\", {
                    textIn: textInPass,
                    nameIn: nameInPass,
                    imageName: imageNamePass,
                    oldCommentsHTML: oldCommentsHTMLPass,
                    entryCount:" . $entryCount
                ."});"

                /* Reset text inputs */
                ."document.getElementById(\"text-" . $i . "\").value = \"\";
                document.getElementById(\"name-" . $i . "\").value = \"\";
            }
        });";
    }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    function addslashes( str ) {
        return (str + '').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
    }

    $(document).ready(function() {
        // Put the script in from php
        <?php echo $echoScript; ?>
    });
</script>