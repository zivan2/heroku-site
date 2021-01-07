<?php
  include "functions.php";

  $conn = mysqli_connect("localhost", "root", "", "image_upload");
  $connComments = mysqli_connect("localhost", "root", "", "comments");
  $connReports = mysqli_connect("localhost", "root", "", "reports");
  
  $imageId = "image";
  $targetDir = "../images/";


  if (!empty($_FILES[$imageId]["name"])) {
    // Get image data
    $imageName = $_FILES[$imageId]["name"];
    $imageTmpName = $_FILES[$imageId]["tmp_name"];
    $targetFile = $targetDir . basename($imageName);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $imageText = mysqli_real_escape_string($conn, $_POST['text']);
    $imageTitle = mysqli_real_escape_string($conn, $_POST['title']);
    $imageNameIn = mysqli_real_escape_string($conn, $_POST['name']);
    
    validate_image_upload($targetDir, $imageName, $imageTmpName);

    // If validations return true, return the errors
    if (validate_string($imageTitle) || validate_string($imageText) || validate_string($imageNameIn) || validate_image_upload($targetDir, $imageName, $imageTmpName)) {

      // Output error messages
      if (validate_string($imageTitle)) {
        echo "Title: " . validate_string($imageTitle) . "</br>";
      } if (validate_string($imageNameIn)) {
        echo "Name: " . validate_string($imageNameIn) . "</br>";
      } if (validate_string($imageText)) {
        echo "Description: " . validate_string($imageText) . "</br>";
      } if (validate_image_upload($targetDir, $imageName, $imageTmpName)) {
        echo validate_image_upload($targetDir, $imageName, $imageTmpName);
      }

    } else { // If all validations return false, upload file

      // Create unique file name for image
      $i = 1;
      $basename = substr($targetFile, 0, strlen($targetFile) - 4);
      while (file_exists($targetFile)) {
          $extension = "(" . $i . ")" . "." . $imageFileType;
          $targetFile = $basename . $extension;
          $i++;
      }


      if (move_uploaded_file($_FILES[$imageId]["tmp_name"], $targetFile)) {

        $imageName = basename($targetFile);
        $targetFile = $targetDir . basename($imageName);

        $date = date("Y/m/d");
        $time = date("h:i:s");
        $timeampm = date("a");

        $query = "INSERT INTO images (`image`, `image_text`, `image_name`, `submit_name`, `submit_time`, `submit_date`, `submit_ampm`) VALUES ('$imageName', '$imageText', '$imageTitle', '$imageNameIn', '$time', '$date', '$timeampm')";
        mysqli_query($conn, $query);


        // Create new table in comments database
        $createCommentTableQuery = "CREATE TABLE IF NOT EXISTS `$imageName` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `comment_text` text NOT NULL,
          `comment_name` text NOT NULL,
          `comment_date` date NOT NULL,
          `comment_time` time NOT NULL,
          `time_ampm` text NOT NULL,
          PRIMARY KEY (`id`)
          ) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1";
        
        mysqli_query($connComments, $createCommentTableQuery);

        //Create new table in reports database
        $createReportTableQuery = "CREATE TABLE `reports`.`$imageName` ( 
          `id` INT NOT NULL AUTO_INCREMENT, 
          `name` TEXT NOT NULL, 
          `reason` TEXT NOT NULL,
          PRIMARY KEY (`id`)
          ) ENGINE = MyISAM";

        mysqli_query($connReports, $createReportTableQuery);

        mysqli_close($conn);
        mysqli_close($connComments);
        mysqli_close($connReports);

        echo "The file ". basename($targetFile). " has been uploaded.";

      } else { echo "File upload error."; }
    }
  } else { echo "Please select an image."; }
?>