<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Erreur 404</title>
</head>
<body style="background-image:url(img/404.jpg); background-repeat:no-repeat; background-size:cover">

    <?php include 'navbar.php';?>
    <div class="container rounded text-center p-2" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color:rgba(255, 255, 255, 0.562)">
        <strong><h1>Erreur 404</h1>
        <p>La page que vous demandez n'existe pas ou n'est pas disponible.</p>
        <br>
        <p>Vous vous êtes perdu dans les méandres de la bibliothèque ! <br> Heureusement on pense à vous en laissant une porte de sortie. ;) </p></strong>
        <a href="http://localhost/bibli/index.php" class="btn btn-primary">Accueil</a>
        <p><?php
        if (!empty($_SERVER['HTTP_REFERER'])) {
        echo '<p><a href="'.$_SERVER['HTTP_REFERER'].'">Retour page précédente</a></p>';
        }
        ?></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>