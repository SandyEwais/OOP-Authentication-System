<?php
if(!isset($_POST['login'])){
    header('location: ../index.php');
    exit();
}
include '../Classes/Database/connect.db.php';
include '../Classes/Core/core.php';
include '../Classes/Models/loginModel.php';
include '../Classes/Controllers/loginController.php';