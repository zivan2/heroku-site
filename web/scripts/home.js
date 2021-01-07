$(document).ready(function() {

    var ding = new Audio("resources/audio/ding.mp3");
    var wrong = new Audio("resources/audio/wrong.mp3");

    // Load first image
    $("#image-replace").load("php/image-load.php", {
        vote: "",
        imageName: ""
    });

    //Popups Cookie Accept and removes it
    setTimeout(function () {
        $("#cookieConsent").fadeIn(200);
    }, 400);
    $("#closeCookieConsent, .cookieConsentOK").click(function() {
        $("#cookieConsent").fadeOut(200);
    }); 


    // When top div is clicked load new image
    $("#top").click(function() {

        // Get image name
        var imageNameGet = document.getElementById("image").getAttribute("src");
        imageNameGet = imageNameGet.replace("images/", "");
        // Get element to remove
        var parent = document.getElementById("image-replace");
        var child = document.getElementById("image");

        parent.removeChild(child);

        // Load new image
        $("#image-replace").load("php/image-load.php", {
            vote: "up",
            imageName: imageNameGet
        });
    });

    // When bottom div is clicked load new image
    $("#bottom").click(function() {

        // Get image name
        var imageNameGet = document.getElementById("image").getAttribute("src");
        imageNameGet = imageNameGet.replace("images/", "");
        // Get element to remove
        var parent = document.getElementById("image-replace");
        var child = document.getElementById("image");

        parent.removeChild(child);

        // Load new image
        $("#image-replace").load("php/image-load.php", {
            vote: "down",
            imageName: imageNameGet
        });
    });


    // Animations
    var top = document.getElementById("top-image");
    var bottom = document.getElementById("bottom-image");

    var maxDim = "220px";
    var minDim = "190px";

    var maxMove = "15px";
    var minMove = "0px";


    $("#top").on('mousedown', function mouseState(e) {
        top.style.width = minDim;
        top.style.height = minDim;

        top.style.left = maxMove;
        top.style.top = maxMove;

        var ding = new Audio("resources/audio/ding.mp3");
        ding.volume = 0.2;
        ding.play();
    });

    $("#bottom").on('mousedown', function mouseState(e) {
        bottom.style.width = minDim;
        bottom.style.height = minDim;

        bottom.style.left = maxMove;
        bottom.style.top = maxMove;

        var wrong = new Audio("resources/audio/wrong.mp3");
        wrong.volume = 0.2;
        wrong.play();
    });

    $(document).on('mouseup', function mouseState(e) {
        // Resize top
        top.style.width = maxDim;
        top.style.height = maxDim;

        top.style.left = minMove;
        top.style.top = minMove;

        // Resize bottom
        bottom.style.width = maxDim;
        bottom.style.height = maxDim;

        bottom.style.left = minMove;
        bottom.style.top = minMove;

    });

});

function report() {
    console.log("clicked");
    var imageNameGet = document.getElementById("image").getAttribute("src");
    imageNameGet = imageNameGet.replace("images/", "");
    window.location.href = "report-page.php?imageName=" + imageNameGet;
}