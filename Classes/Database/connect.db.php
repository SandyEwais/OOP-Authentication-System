<?php
class Connect
{
    protected function connect(){
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'oopsystem';
        try{
            $conn = new PDO("mysql:host=$host;dbname=$database",$username,$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;

        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }

    
}
