<?php
// On ouvre la session ici
include_once 'isAuthenticated.php';
$pageTitle = 'Home';
include_once './fragments/header.php';
include_once 'autoload.php';
$userRepository = new UserRepository();
$id = $_GET["id"];
$userRepository->delete($id);
header("Location:home.php");
?>