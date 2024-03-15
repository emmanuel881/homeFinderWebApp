<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Site home page</h1>
    <?php
        if(isset($_SESSION["userid"])){
        ?>
        <h1>Thank you,... You are logged in as <?php echo $_SESSION["useruid"] ?></h1>
        <?php
        }
        else{
        ?>
        <h1>Please login</h1>
        <?php
        }
        ?>
    <a href="./login.php">
    <button>Login</button>
    </a>
    
    <?php
        if(isset($_SESSION["userid"])){
        ?>
        <a href="./includes/logout.inc.php">
        <button>Logout</button>
        </a>
        <a href="profile.php">
        <button>My Profile</button>
      </a>
        <?php
        }
        ?>
    
    
    
</body>
</html>