<?php
// On ouvre la session ici
include_once 'isAuthenticated.php';
$pageTitle = 'Home';
include_once './fragments/header.php';
include_once 'autoload.php';
$cnx = ConnexionDB::getInstance();
$request = 'select * from skill';
$reponse = $cnx->query($request);

?>

<div class="container">
    <div class="alert alert-success">
        Bienvenu chez vous :)
    </div>
    <?php
        $skills = $reponse->fetchAll(PDO::FETCH_OBJ);
        foreach($skills as $skill):
    ?>
    <div class="alert alert-primary">
        <?= $skill->designation ?>
    </div>
    <?php endforeach ?>
</div>

<?php
// On ouvre la session ici

include_once './fragments/footer.php'
?>
