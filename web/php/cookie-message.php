<?php
    $display = false;
    if (!isset($_COOKIE['cookieMessage'])) {
        // If cookie doesn't exist, create cookie, set display to true
        setcookie("cookieMessage", "", time() + 86400, "/");
        $display = true;
    }

    function displayCookieMessage($display) {
        // If cookie has just been created, display the message
        if ($display) {
            echo "
            <div id=\"cookieConsent\">
                <div id=\"closeCookieConsent\">x</div>
                This website is using cookies. Accept the <a> Terms and Conditions </a> to continue <a href=\"http://www.whatarecookies.com/\" target=\"_blank\">More info</a>. <a class=\"cookieConsentOK\">That's Fine</a>
            </div>
            ";
        }
    }
?>