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
        <div class="row">
            <div class="col-10">Bienvenu chez vous :) </div>
            <div class="col-2"><a href="addUser.php" class="alert alert-info">Add User</a></div>
        </div>
    </div>
    <?php
        foreach($users as $user):
    ?>
    <div class="alert <?php if ($user->role == 'admin') { echo 'alert-danger'; } else  { echo 'alert-primary';} ?> ">
        <div class="row">
            <div class="col-9"><?= $user->id ?> : <?= $user->username ?></div>
            <div class="col-3">
                <a href="userDetails.php?id=<?= $user->id ?>" class="btn btn-dark">Details</a>
                <a href="deleteUser.php?id=<?= $user->id ?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    <?php endforeach ?>
</div>

<?php
// On ouvre la session ici

include_once './fragments/footer.php'
?>
