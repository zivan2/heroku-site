<?php include "php/cookie-message.php"; ?>

<head>
  <link rel="stylesheet" href="styles/style.css">
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="scripts/home.js"></script>
<script src="scripts/header.js"></script>

<html>
  <body class="noscroll">
    <div class="grid-container">

      <?php include "header.php"; ?>
        
      <div class="grid">
      <a class="report" onclick="report()">Report</a>
      </div>

      <div class="grid">
        <div class="body-container">
        <!-- Image -->
        <div class="grid main" id="image-replace" name="image-replace"></div>

          <!-- Vote buttons -->
          <div class="grid">
            <div class="button-container">
              <div class="grid vote-button votes" id="top">
                <img class="votes" id="top-image" draggable="false" src="resources/upvote.png">
              </div>
              <div class="grid vote-button votes" id="bottom">
                <img class="votes" id="bottom-image" draggable="false" src="resources/downvote.png">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid"></div>
    </div>
  </body>
  
  <?php displayCookieMessage($display); ?>

</html>