<?php
session_start();
$stockSandwitch = 10;
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$nbSandwitch = $_POST['nbSandwitch'];
$adresse = $_POST['adresse'];
$typeSandwitch = $_POST['typeSandwitch'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Recap</title>
</head>
<body>
<?php if ($stockSandwitch<$nbSandwitch){
    $_SESSION['errorMessage']="Quantité non disponible !";
    header('location:resa.php'); ?>
        <?php
}else{?>
<div class="p-3 mb-2 bg-success text-white">Livraison passée avec succès</div>
<div class="p-3 mb-2 bg-light text-dark">Mme/Mrs <?= $nom ?> <?= $prenom ?>, Vous avez passez une commande à l'adresse suivante : <?= $adresse?><br>
Détails de la commande : <?= $nbSandwitch ?> Sandwitch(s) <?= $typeSandwitch ?> supplement:
    <?php if(isset($_POST['ingredient']))
    { foreach ($_POST['ingredient'] as $value){
        echo $value.' ';
    } } else{
        echo 'aucun';
    }
        ?>

<br>Montant totale:
    <?php if ($nbSandwitch>10)
         { echo $nbSandwitch*4*(0.1).'dt';
         }else{
          echo 4*$nbSandwitch.'dt';

    } ?>
    </div>
</body>
</html>
<?php
if (isset($_FILES['cin'])&&$_FILES['cin']){
    $path = 'uploads/'.uniqid().$_FILES['cin']['name'];
    copy($_FILES['avatar']['tmp_name'],$path);
}
?>
<?php }?>
