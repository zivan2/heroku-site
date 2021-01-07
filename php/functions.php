<?php
    // Check for undesirable inputs   |   May add additional conditions in the future
    function validate_string($stringIn) {
        $errorString = "INPUT ERROR: ";
        $changed = false;

        if ($stringIn == "") {
            $errorString = $errorString . "input cannot be empty.";
            $changed = true;
        }
        
        // If there are no errors, return false
        if ($errorString == "INPUT ERROR: ") {
            return false;
        } else {
            // Else, return the errors
            return $errorString;
        }
    }


    
    // Validate image uploading
    function validate_image_upload($targetDir, $imageName, $imageTmpName) {
        $errorString = "IMAGE UPLOAD ERROR: ";
        $changed = false;

        $targetFile = $targetDir . basename($imageName);

        // Check if image file is a actual image or fake image
        $imageCheck = getimagesize($imageTmpName);
        if ($imageCheck == false) {
            $errorString = $errorString . "file is not an image.";
        } else { // IF file is not an image, all other conditions are false by implication

            // Allow certain file formats
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpg" && $imageFileType != "gif" ) {
                $errorString = $errorString . "only .png, .jpg, and .gif files are allowed.";
            }
        }

        // If there are no errors, return false
        if ($errorString == "IMAGE UPLOAD ERROR: ") {
            return false;
        } else {
            // Else, return the errors
            return $errorString;
        }
    }
?>