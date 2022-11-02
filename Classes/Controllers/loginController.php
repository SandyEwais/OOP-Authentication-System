<?php
class LoginController extends Core
{
    protected $email;
    protected $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function loginAttempt(){
        // if($this->emptyInput()){
        //     header('location: ../index.php?error=emptyfield');
        //     exit();
        // }
        if($this->invalidEmail()){
            header('location: ../index.php?error=invalidemail');
            exit();
        }
        $this->loginUser($this->email, $this->password);

    }

    

}