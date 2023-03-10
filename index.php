<?php

// creo una funzione che mi vada a generare una password randomica in base al valore di input che l'utente inserisce nel form
require __DIR__ . '/data/includes.php';

if (isset($_GET['pswlength'])) {
    $result = password_generate($_GET['pswlength']);
    if ($result === true) header('Location: password.php');
};


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <form class="row g-3 mt-5" method="GET">
            <div class="col-auto">
                <label for="" class="visually-hidden"></label>
                <p>Scrivi la lunghezza della tua password :</p>
            </div>
            <div class="col-auto">
                <label for="inputPassword2" class="visually-hidden"></label>
                <input type="number" class="form-control" id="inputPassword2" placeholder="lunghezza pasword" min='5' name="pswlength" value="5" step='1'>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Genera password</button>
            </div>
        </form>
    </div>
</body>

</html>