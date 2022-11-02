<?php
if(!isset($_POST['login'])){
    header('location: ../index.php');
    exit();
}
include '../Classes/Database/connect.db.php';
include '../Classes/Models/userModel.php';
include '../Classes/Core/core.php';
include '../Classes/Controllers/loginController.php';

$email = $_POST['email'];
$password = $_POST['password'];
$login = new LoginController($email, $password);
$login->loginAttempt($email, $password);