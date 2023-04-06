<?php
// On ouvre la session ici
include_once 'isAuthenticated.php';
$pageTitle = 'Home';
include_once './fragments/header.php';
include_once 'autoload.php';
$userRepository = new UserRepository();
$users = $userRepository->findAll();
?>

<div class="container">
    <div class="alert alert-success">
        Bienvenu chez vous :)
        <p><a class="btn btn-success" href="addUser.php">Add User</a></p>
    </div>
    <?php
        foreach($users as $user):
    ?>
    <div class="alert <?php if($user->role === 'admin') { echo 'alert-danger'; } else { echo 'alert-primary'; } ?>">
        <?= $user->id ?> : <?= $user->username ?>
        <a class="btn btn-warning" href="userDetails.php?id=<?= $user->id ?>">Details</a>
        <a class="btn btn-danger" href="deleteUser.php?id=<?= $user->id ?>">Delete</a>
    </div>
    <?php endforeach ?>
</div>

<?php
// On ouvre la session ici

include_once './fragments/footer.php'
?>
