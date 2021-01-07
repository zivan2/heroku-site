<?php include "php/cookie-message.php"; ?>
<!DOCTYPE html>
<head>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="scripts/header.js"></script>

<html>
  
  <?php include "header.php"; ?>

  <!-- Form -->
    <div id="content">
      <form method="post" action="php/form-upload.php" target="_blank" enctype="multipart/form-data">
        Upload image: <input class="form-input" type="file" name="image" id="image"></br></br>
        Title: <input type="text" name="title" id="title"></br>
        Your name: <input type="text" name="name" id="name"></br>
        Description: <input type="text" name="text" id="text"></br>
        <button type="submit" name="upload" id="upload">POST</button>
      </form>	
    </div>

    <?php displayCookieMessage($display); ?>

</html>