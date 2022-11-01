<?php
class SignupController extends Core
{
    protected $name;
    protected $email;
    protected $password;
    protected $password_confirmation;


    public function __construct($name, $email, $password, $password_confirmation)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->password_confirmation = $password_confirmation;
    }

    public function signupUser() {
        if($this->emptyInput()){
            header('location: ../index.php?error=emptyinput');
            exit();
        }
        if($this->invalidName()){
            header('location: ../index.php?error=invalidname');
            exit();
        }
        if($this->invalidEmail()){
            header('location: ../index.php?error=invalidemail');
            exit();
        }
        if($this->passwordMatch()){
            header('location: ../index.php?error=passwordmatch');
            exit();
        }
        if($this->takenCheck()){
            header('location: ../index.php?error=Taken');
            exit();
        }

        $this->insertUser($this->name, $this->email, $this->password);
    }

    
    
}