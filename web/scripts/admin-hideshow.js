// Show and hide images
function imageHideShow(index) {
    if (index == 0) {
        var topLink = document.getElementById("hide-show-all");
        var hideShow = topLink.getAttribute("name");
        var i;
        console.log(entryCount);
        if (hideShow == "true") {

            for (i = 1; i <= entryCount; i++) {
                imageHide(i);
            }
            topLink.setAttribute("name", "false");
            topLink.textContent = "[show all images]";

        } else if (hideShow == "false") {

            for (i = 1; i <= entryCount; i++) {
                imageShow(i);
            }
            topLink.setAttribute("name", "true");
            topLink.textContent = "[hide all images]";
        }

    } else {
        var image = document.getElementById("image-" + index);
        if (image.style.display == "none") {
            imageShow(index);
        } else {
            imageHide(index);
        }
    }
}

// Hide single image
function imageHide(index) {
    var image = document.getElementById("image-" + index);
    var replacement = document.getElementById("image-hide-replacement-" + index);
    var link = document.getElementById("image-hide-link-" + index);

    image.style.display = "none";
    replacement.textContent = "...";
    link.textContent = "[show image]";
}

// Show single image
function imageShow(index) {
    var image = document.getElementById("image-" + index);
    var replacement = document.getElementById("image-hide-replacement-" + index);
    var link = document.getElementById("image-hide-link-" + index);

    image.style.display = "block";
    replacement.textContent = "";
    link.textContent = "[hide image]";
}



// Show and hide comments
function commentHideShow(index) {
    var comments = document.getElementById("comment-container-" + index);
    var replacement = document.getElementById("comment-hide-replacement-" + index);
    var link = document.getElementById("comment-hide-link-" + index);

    if (comments.style.display == "none") {
        comments.style.display = "block";
        replacement.textContent = "";
        link.textContent = "[hide comments]";
    } else {
        comments.style.display = "none";
        replacement.textContent = "...";
        link.textContent = "[show comments]";
    }
}