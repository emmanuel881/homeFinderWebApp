<?php
//if i want to change something in the database

class SignUpContr extends signup{
    //creating class properties
    private $username;
    private $pwd;
    private $pwdrepeat;
    private $email;
    private $userStatus;

    //my constructor
    public function __construct($username, $pwd, $pwdrepeat, $email, $userStatus){
        $this->username = $username;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
        $this->userStatus = $userStatus;
    }

    //signing up the user
    // ---- first we check if user passes all the errors that might occur
    public function signupUser(){
        //carry out error handling using the methods created
        if($this->emptyInput()== false){
            //echo "empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if($this->invalidUid()== false){
            //echo "invalid user id";
            header("location: ../index.php?error=invalidUserName");
            exit();
        }
        if($this->invalidEmail()== false){
            //echo "invalid email";
            header("location: ../index.php?error=InvalidEmail");
            exit();
        }
        if($this->pwdMatch()== false){
            //echo "passwords don't match";
            header("location: ../index.php?error=pwdMissMatch");
            exit();
        }
        if($this->uidTakenCheck()== false){
            //echo "username taken";
            header("location: ../index.php?error=usernameTaken");
            exit();
        }

        //-- we now sign in the user
        $this->setUser($this->username, $this->pwd, $this->email, $this->userStatus);
   }



    private function emptyInput(){
         //carry out error handling 
         $result;
         //check if a property is empty(user didn't fill in)
         if(empty($this->username || $this->pwd || $this->pwdrepeat || $this->email || $this->userStatus)){
            $result = false;
         }
         else {
            $result = true;
         }
         return $result;
    }

    //check the correct input format
    private function invalidUid(){
        //carry out error handling 
        $result;
        //check if its a vald username
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
           $result = false;
        }
        else {
           $result = true;
        }
        return $result;
   }

   //check if the email is valid

   private function invalidEmail(){
    //carry out error handling 
    $result;
    //check if its a valid email
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
       $result = false;
    }
    else {
       $result = true;
    }
    return $result;
}
//checking if passwords match
private function pwdMatch(){
    //carry out error handling 
    $result;
    //check if passwords match
    if($this->pwd !== $this->pwdrepeat){
       $result = false;
    }
    else {
       $result = true;
    }
    return $result;
}
//check if user exist
private function uidTakenCheck(){
    //carry out error handling 
    $result;
    //check if user exists
    if(!$this->checkUser($this->username, $this->email)){ 
       $result = false;
      }
    else {
       $result = true;
    }
    return $result;
}
public function fetchUserId($uid){
    $userId = $this->getUserId($uid);

    return $userId[0]["users_id"];
}


}






?>