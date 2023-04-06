<?php
// On ouvre la session ici
include_once 'isAuthenticated.php';
$pageTitle = 'Home';
include_once './fragments/header.php';
include_once 'autoload.php';
$userRepository = new UserRepository();
$id = $_GET["id"];
$user = $userRepository->findById($id);
if (!$user) {
    header("Location:home.php");
}
?>

    <div class="container">
        <div class="alert alert-secondary">
            <p>username: <?=$user->username ?></p>
            <p>role: <?=$user->role ?></p>
        </div>
    </div>


<?php
// On ouvre la session ici

include_once './fragments/footer.php'
?>
