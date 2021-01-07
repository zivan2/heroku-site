<?php 
    $conn = mysqli_connect("localhost", "root", "", "comments");

    // Get inputs
    $textIn = mysqli_real_escape_string($conn, $_POST['textIn']);
    $nameIn = mysqli_real_escape_string($conn, $_POST['nameIn']);
    $imageName = $_POST['imageName'];
    $entryCount = $_POST['entryCount'];
    $oldComments = str_replace("\\", "", $_POST['oldCommentsHTML']);


    // If no comments
    if (strpos($oldComments, "No comments. Be the first one to comment!")) {
        $oldComments = "";
    }


    // Get time and date
    $date = date("Y/m/d");
    $time = date("h:i:s");
    $timeampm = date("a");

    // Add new comment to database
    $query = "INSERT INTO `$imageName` (`comment_text`, `comment_name`, `comment_date`, `comment_time`, `time_ampm`) VALUES ('$textIn', '$nameIn', '$date', '$time', '$timeampm')";
    mysqli_query($conn, $query);
?>

<!-- New comment -->
<div class="comment-single">
    <b class="comment-title"><?php echo $nameIn; ?></b></br>
    <p class="comment-info"><?php echo "Submitted at " . $time . $timeampm . " on " . $date . " to " . $imageName . "."; ?></p>
    <p class="comment-text"><?php echo $textIn; ?></p>
</div>

<?php echo $oldComments; ?>