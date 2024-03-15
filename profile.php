<?php
    session_start();

    include "./classes/dbh.classes.php";
    include "./classes/profileinfo.classes.php";
    
    include "./classes/profileinfo-view.classes.php";

    $profileInfo = new ProfileInfoView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>
<body>
    <h1><?php
            $profileInfo->fetchTitle($_SESSION["userid"]);
         ?></h1>
    <h2>About</h2>
    <p>
    <?php
            $profileInfo->fetchAbout($_SESSION["userid"]);
         ?>
    </p>

    <p>
    <?php
            $profileInfo->fetchText($_SESSION["userid"]);
         ?>
    </p>
</body>
</html>