<?php
class LoginController
{
    private $email;
    private $password;

    private function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    

}