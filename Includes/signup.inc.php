<?php
if(!isset($_POST['signup'])){
    header('location: ../index.php');
    exit();
}
include '../Classes/Database/connect.db.php';
include '../Classes/Models/userModel.php';
include '../Classes/Core/core.php';
include '../Classes/Controllers/signupController.php';


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];

$signup = new SignupController($name, $email, $password, $password_confirmation);
$signup->signupUser();
header('location: ../index.php?error=none');

