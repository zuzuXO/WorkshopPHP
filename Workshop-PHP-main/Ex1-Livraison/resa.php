<?php  session_start();
if (isset($_SESSION['errorMessage'])){
    ?>
    <div class="alert alert-danger" role="alert">
        <?= $_SESSION['errorMessage'] ?>
    </div>
<?php
unset($_SESSION['errorMessage']); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Commande</title>
</head>
<body>
<div class="container">
    <form action="recap.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Input">Nom :</label>
            <input type="text" class="form-control" id="Input" name="nom" placeholder="Nom" required>
        </div>
        <br>
        <div class="form-group">
            <label for="Input2">Prénom :</label>
            <input type="text" class="form-control" name="prenom" id="Input2" placeholder="Prenom" required>
        </div>
        <br>
        <div class="form-group">
            <label for="Input3">Le nombre des Sandwichs :</label>
            <input type="number" class="form-control" id="Input3" name="nbSandwitch" placeholder="" min="1" required>
        </div>
        <br>
        <div class="form-group">
            <label for="Input4">Adresse :</label>
            <textarea id="Input4" name="adresse" class="form-control" placeholder="Veuillez ajouter votre adresse exacte" required></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="Input5">Type du sandwitch :</label>
            <select name="typeSandwitch" id="Input5">
                <option value="">--Choisissez un type--</option>
                <option value="viande">viande</option>
                <option value="poulet">poulet</option>
                <option value="escalope">escalope</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label >Ajouter des ingrédients :</label>
            <input type="checkbox" id="harissa" name="ingredient[]" value="harissa"> <label for="harissa">harissa</label>
            <input type="checkbox" id="salade" name="ingredient[]" value="salade"> <label for="salade">salade</label>
            <input type="checkbox" id="mayonnaise" name="ingredient[]" value="mayonnaise"> <label for="mayonnaise">mayonnaise</label>
        </div>
        <br>
        <label class="form-label" for="customFile">Uploader CIN</label>
        <input type="file" class="form-control" id="customFile" name="cin"/>
        <br>
        <button type="submit" class="btn btn-outline-success">Commander</button>
    </form>
</div>
</body>
</html>