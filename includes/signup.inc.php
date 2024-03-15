<?php
//lets check if form was submitted

if(isset($_POST["submit"])){
    //lets grab the data
    $username = htmlspecialchars($_POST["username"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
    $pwdrepeat = htmlspecialchars($_POST["retype_password"], ENT_QUOTES, 'UTF-8');
    $userStatus = htmlspecialchars($_POST["userStatus"], ENT_QUOTES, 'UTF-8');

    


    
    //Instantiate signupController class(SignUpContr)
    // --    createing a object based of a class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    //create the user object
    $signup = new signupContr($username, $pwd, $pwdrepeat, $email, $userStatus);

    //lets regester the user if they pass all the error handlers
    $signup->signupUser();


    //creating profile in the profile table
    $userId = $signup->fetchUserId($username);
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";

    //create a profile object
    $profileInfo = new ProfileInfoContr($userId, $username);
    //create the default info
    $profileInfo->defaultProfileInfo();


    //will redirect user to the main page after we regester them
    header("location: ../index.php?error=none");
}

 