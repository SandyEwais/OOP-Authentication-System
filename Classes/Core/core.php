<?php
class Core extends SignupModel
{
    protected function emptyInput() {
        if(empty($this->name) || empty($this->email) || empty($this->password) || empty($this->password_confirmation)){
            $result = true;

        }else{
            $result = false;
        }
        return $result;
    }

    protected function invalidName() {
        if(!preg_match("/^[a-zA-Z\s]*$/",$this->name)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    protected function invalidEmail() {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    protected function passwordMatch() {
        if($this->password !== $this->password_confirmation){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
    protected function takenCheck() {
        if($this->checkUser($this->name,$this->email)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }
}