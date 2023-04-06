<?php
// On ouvre la session ici
include_once 'isAuthenticated.php';
include_once 'autoload.php';
$id = htmlspecialchars($_GET['id']);
$userRepository = new UserRepository();
$user = $userRepository->delete($id);
header("Location:home.php" );
?>