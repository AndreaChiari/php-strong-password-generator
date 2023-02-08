<?php
$pswlength = $_GET['pswlength'] ?? '';

// creo una funzione che mi vada a generare una password randomica in base al valore di input che l'utente inserisce nel form


function password_generate($chars) 
{
    $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz#@$%!?';
    return substr(str_shuffle($data), 0, $chars);
}

$userpsw = password_generate($pswlength);


//redireziono l'utente in un'altra pagina per mostrargli la password


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
                <input type="input" class="form-control" id="inputPassword2" placeholder="lunghezza pasword" name="pswlength">

            </div>
            <p><?= $userpsw ?></p>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Genera password</button>
            </div>
        </form>
    </div>
</body>

</html>