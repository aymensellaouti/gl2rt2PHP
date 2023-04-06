<?php
// On ouvre la session ici
$pageTitle = 'Login';
include_once './fragments/header.php'
?>

<div class="container">
    <?php
    if (isset($_GET['error'])) {
        ?>
        <div class="alert alert-danger">
            <?=$_GET['error'] ?>
        </div>
    <?php }?>
    <form action="processForm.php" method="POST">
        username : <input name="username" type="text" class="form-control">
        password <input type="password" name="password" class="form-control">
        <button class="btn btn-primary">
            Login
        </button>
    </form>




</div>
<?php
// On ouvre la session ici
include_once './fragments/footer.php'
?>
