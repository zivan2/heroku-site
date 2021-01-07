<?php
    // Image change button click handlers
    $imageButtonHandlers = "";
    for ($i = 1; $i <= $entryCount; $i++){
        $imageButtonHandlers = $imageButtonHandlers
        /* Change title */
        ."$(\"#change-title-button-" . $i . "\").click(function() {
            "
            /* Get values from text inputs, get name of the image the change is made to */
            ."var titleInPass = document.getElementById(\"change-title-" . $i . "\").value;
            var imageNameElement = document.getElementById(\"image-" . $i . "\");
            var imageNamePass = imageNameElement.getAttribute(\"name\");
            "

            /* Get HTML of the image div */
            ."var oldDivHTMLPass = addslashes(document.getElementById(\"image-other-" . $i . "\").innerHTML);
            "

            /* Load new data into change handler script */
            ."$(\"#image-outer-" . $i . "\").load(\"php/management/change-handler-images.php\", {
                titleChangeSet: \"true\",
                titleChange: titleInPass,
                descriptionChangeSet: \"false\",
                descriptionChange: \"\",
                delete: \"false\",
                imageName: imageNamePass,
                oldHTML: oldDivHTMLPass,
                index: " . $i
            ."
            });
            "

            /* Reset text inputs */
            ."document.getElementById(\"change-title-" . $i . "\").value = \"\";
        });
        "
        

        /* Change description */
        ."$(\"#change-description-button-" . $i . "\").click(function() {
            "
            /* Get values from text inputs, get name of the image the change is made to */
            ."var descriptionInPass = document.getElementById(\"change-description-" . $i . "\").value;
            var imageNameElement = document.getElementById(\"image-" . $i . "\");
            var imageNamePass = imageNameElement.getAttribute(\"name\");
            "

            /* Get HTML of the image div */
            ."var oldDivHTMLPass = addslashes(document.getElementById(\"image-other-" . $i . "\").innerHTML);
            "

            /* Load new data into change handler script */
            ."$(\"#image-outer-" . $i . "\").load(\"php/management/change-handler-images.php\", {
                titleChangeSet: \"false\",
                titleChange: \"\",
                descriptionChangeSet: \"true\",
                descriptionChange: descriptionInPass,
                delete: \"false\",
                imageName: imageNamePass,
                oldHTML: oldDivHTMLPass,
                index: " . $i
            ."
            });
            "

            /* Reset text inputs */
            ."document.getElementById(\"change-description-" . $i . "\").value = \"\";
        });"
        

        /* Delete image */
        ."$(\"#delete-" . $i . "\").click(function() {
            "
            /* If user confirms deletion */
            ."if (confirm(\"Are you sure you want to delete this image?\")) {"
                /* Get name of the image to be deleted */
                ."var imageNameElement = document.getElementById(\"image-" . $i . "\");
                var imageNamePass = imageNameElement.getAttribute(\"name\");
                "

                /* Load new data into change handler script */
                ."$(\"#image-outer-" . $i . "\").load(\"php/management/change-handler-images.php\", {
                    titleChangeSet: \"false\",
                    titleChange: \"\",
                    descriptionChangeSet: \"false\",
                    descriptionChange: \"\",
                    delete: \"true\",
                    imageName: imageNamePass,
                    oldHTML: \"\",
                    index:" . $i
                ."});
            }
        });
        ";
    }
?>

<?php include "admin-script-comments.php"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="scripts/admin-hideshow.js"></script>

<script>
    var entryCount = <?php echo $entryCount; ?>;

    $(document).ready(function() {
        // Put the script in from php
        <?php echo $imageButtonHandlers; ?>
        <?php echo $commentButtonHandlers; ?>
    });

    function addslashes( str ) {
        return (str + '').replace(/[\\"']/g, '\\$&').replace(/\u0000/g, '\\0');
    }
</script>