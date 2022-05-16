<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Sondage</title>

    <div class="mx-auto" style="width: 200px;">
        <form action="vote.php" method="post">
            <br>
            <h1 class="text-secondary">Evaluer cours PHP</h1>
            <br><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="vote" value="bon" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    BON
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="vote" value="moyen" id="flexRadioDefault2" >
                <label class="form-check-label" for="flexRadioDefault2">
                    MOYEN
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="vote" value="mauvais" id="flexRadioDefault3" >
                <label class="form-check-label" for="flexRadioDefault3">
                    MAUVAIS
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</head>
<body>

</body>
</html>
