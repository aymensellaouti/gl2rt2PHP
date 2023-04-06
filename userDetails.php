<?php
// On ouvre la session ici
include_once 'isAuthenticated.php';
$pageTitle = 'Home';
include_once './fragments/header.php';
include_once 'autoload.php';
$id = htmlspecialchars($_GET['id']);
$userRepository = new UserRepository();
$user = $userRepository->findById($id);
if (!$user) {
    header("Location:home.php" );
}
?>
<div class="container">
    <div class="alert alert-secondary">
        <p><?= $user->id ?></p>
        <p><?= $user->username ?></p>
        <p><?= $user->role ?></p>
    </div>
</div>

<?php
// On ouvre la session ici

include_once './fragments/footer.php'
?>
