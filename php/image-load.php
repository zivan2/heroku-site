<?php
      $conn = mysqli_connect("localhost", "root", "", "image_upload");

      // Get name of image and up or down vote
      $vote = $_POST['vote'];
      $imageName = $_POST['imageName'];

      // Add score to database
      $queryUp = "UPDATE `images` SET `score` = (score + 1) WHERE `image` = '$imageName'";
      $queryDown = "UPDATE `images` SET `score` = (score - 1) WHERE `image` = '$imageName'";

      if ($vote == "up") {
          mysqli_query($conn, $queryUp);
      } else if ($vote == "down"){
          mysqli_query($conn, $queryDown);
      }

      // Get all images and their respective scores
      $query = "SELECT score, image FROM images";
      $result = mysqli_query($conn, $query);

      $storeArray = [];
      $storeArrayScore = [];

      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
          $storeArray[] =  $row['image'];
          $storeArrayScore[] = $row['score'];
      }


      // Choose random image that is not the same as the current image
      $imageLink = $imageName;
      while ($imageLink == $imageName) {
        $length = count($storeArray);
        $random = round(rand(0, $length - 1));
        $imageLink = $storeArray[$random];
        $echoLink = "images/" . $imageLink;
      }
?>

<!-- New image -->
<img id="image" class="main image" src="<?php echo $echoLink; ?>" alt="Unkown Error">