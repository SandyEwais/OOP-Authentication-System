<?php
class UserModel extends Connect {
    protected function checkUser($name, $email){
        $statement = $this->connect()->prepare('SELECT name FROM users WHERE name = ? OR email = ?;');
        if(!$statement->execute(array($name,$email))){
            $statement = null;
            header('location: ../index.php?error=statementfailed');
            exit();
        }
        if($statement->rowCount() > 0){
            $resultCheck = true;
        }else{
            $resultCheck = false;
        }
        return $resultCheck;
    }

    protected function insertUser($name, $email, $password){
        $statement = $this->connect()->prepare('INSERT INTO users (name, email, password) VALUES (?,?,?);');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if(!$statement->execute(array($name, $email, $hashedPassword))){
            $statement = null;
            header('location: ../index.php?error=statementfailed');
            exit();
        }
        $statement = null;
    }

    protected function loginUser($email, $password){
        $statement = $this->connect()->prepare('SELECT id FROM users WHERE email = ? OR password = ?;');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if(!$statement->execute(array($email, $hashedPassword))){
            $statement = null;
            header('location: ../index.php?error=statementfailed');
            exit();
        }
        if($statement->rowCount() > 0){
            
            $_SESSION['login'] = "Logged In";
            header('location: ../index.php?status=loggedIn');
        }else{
            header('location: ../index.php?error=LoggingInFailed');
        }
        $statement = null;
    }

}