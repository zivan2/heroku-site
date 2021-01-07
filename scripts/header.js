$(document).ready(function() {
    var path = window.location.pathname;
    var page = path.split("/").pop();

    var home = document.getElementById("Home");
    var add = document.getElementById("Add");
    var leaderboard = document.getElementById("Leaderboard");
    

    if ((page == "index.php") || (page == "")) {
        home.setAttribute("class", "active");
    } 

    if (page == "form.php") {
        add.setAttribute("class", "active");
    } 

    if (page == "leaderboard.php") {
        leaderboard.setAttribute("class", "active");
    }
});