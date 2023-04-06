<?php

include_once 'isAuthenticated.php';
include_once 'autoload.php';

$userRepository = new UserRepository();
$user = $userRepository->create($_POST);
header("Location:home.php" );
?>