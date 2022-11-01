<?php
class Testing
{
    public function emptyInput($inputName){
        if (empty($_POST["$inputName"])) {  
            $errMsg = "Error! You didn't enter the Name.";  
            return $errMsg;  
        } else {  
            $name = $_POST["name"];  
            return $name;
        }  
    }
}