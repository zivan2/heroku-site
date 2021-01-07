<head>
    <link rel="cssheet" href="styles/style.css">
</head>

<body>
    <div class="content">
        <form method="post">
            Your name:</br>
            <input type="text" id="name" name="name"></br></br>
            Reason for report:</br>
            <input type="radio" name="reason" id="reason" value="reason1">reason1</br>
            <input type="radio" name="reason" id="reason" value="reason2">reason2</br>
            <input type="radio" name="reason" id="reason" value="reason3">reason3</br>
            <input type="radio" name="reason" id="reason" value="reason4">reason4</br>
            <button type="submit" name="submit" id="submit">Submit</button>
        </form>
    </div>
</body>

<?php include "php/report.php"; ?>