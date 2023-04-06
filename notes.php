<?php
$notes = [10, 2, 20, 0, 18, 15];
$user = [
    "name" => "sellaouti",
    "firstname" => "aymen"
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="alert alert-danger">
        Liste des notes
    </div>
    <table class="table">
        <?php
        foreach ($notes as $note) {
            ?>
            <tr>
                <td><?= $note ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <?php
        foreach($user as $cle => $value):
    ?>
        <div class="alert alert-primary">
            <?= $cle ?> : <?= $value ?>
        </div>
    <?php endforeach ?>
</div>

</body>
</html>
