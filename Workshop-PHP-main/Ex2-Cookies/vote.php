<?php
$vote = $_POST['vote'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recap</title>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cyborg">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<?php
if (isset($_COOKIE['reponse'])){
?>
    <div class='alert alert-danger'> Vous avez deja voté et votre réponse était : <?=$_COOKIE['reponse'] ?> </div>
<?php
}else{
?>
    <div class="alert alert-success">Votre réponse a été bien enregistrée </div>
<?php
    setcookie('reponse',$vote,time()+ 2*60);
}
?>

</body>
</html>
