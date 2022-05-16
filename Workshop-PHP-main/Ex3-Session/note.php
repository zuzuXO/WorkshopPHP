<?php
session_start();
if($_SERVER['REQUEST_METHOD']==='POST'){
    $note=$_POST['note'] ;
    $note=array('note'=>$note);
    $notes=isset($_SESSION['notes'])?$_SESSION['notes']:[];
    $notes[]=$note;
    $_SESSION['notes']=$notes;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Note</title>
</head>
<body>
<div class="container">
    <?php if (isset($_SESSION['ajout'])){
        ?>
        <div class="alert alert-success" role="alert">
            <?php echo strval($_SESSION['ajout']); unset($_SESSION['ajout'])?>
        </div>
    <?php
    } ?>
    <form action="" method="post">

        <div class="form-group">
            <label for="exampleFormControlTextarea1"><h3 class="text-info">Créer une note...</h3></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="note" rows="3"></textarea>
            <button type="submit" class="btn btn-outline-info">Ajouter</button>
            <button type="reset" class="btn btn-outline-danger">Annuler</button>
            <br><br>
        </div>
        <div >
            <?php if(isset($notes)){ foreach ($notes as $note):?>
                <div class="card">
                    <div class="card-body">
                        <?= $note['note']?>
                    </div>
                </div>
            <?php endforeach;}?>
        </div>
    </form>

</div>
</body>
</html>
