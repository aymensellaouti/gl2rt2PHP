<?php
// On ouvre la session ici
include_once 'isAuthenticated.php';
include_once './fragments/header.php';
include_once 'autoload.php';
$userRepository = new UserRepository();
$userRepository->create($_POST);
header("Location:home.php");
?>