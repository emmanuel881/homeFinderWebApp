<?php
//deal with all the database stuff
// will extend to the db class so as to use the properties of that class
class Signup extends Dbh{
    //create methods to query the DB
    //lets check if user name or password already exist in the DB,.. and send output to the controller
    protected function checkuser($username, $email){
        //query DB
        //connect is a method to connect to the database
        $stmt = $this->connect()->prepare('SELECT users_id FROM users WHERE users_uid = ? OR users_email = ?;');
        //if stmt fails
        if(!$stmt->execute(array($username, $email))){
            // reset statement if it exists
            $stmt = null;
            //redirect to index
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        //if the user or email exsist
        $resultCheck;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }
        //if not
        else{
            $resultCheck = true;
        }
        return $resultCheck;
    }

    protected function setUser($username, $pwd, $email, $userStatus){
        //lets insert the data into the database
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email, users_status) VALUES (?, ?, ?, ?);');     

        //lets hash the password for encryption due to security reasons
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        //lets check if the statement was properly executed
        //we are passing an array to the execute funtion that replaces the ? in our statement and to execute it
        if(!$stmt->execute(array($username, $hashedPwd, $email, $userStatus))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
        }
        $stmt = null;

    }
    protected function getUserId($uid){
        $stmt = $this->connect()->prepare('SELECT users_id FROM users WHERE users_uid = ?;');

        if(!$stmt->execute(array($uid))){
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header('location: ../index.php?error=profilenotfound');
            exit();
        }

        //fetch data as an associative array
        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }
}





?>