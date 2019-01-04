<?php
    if(isset($_GET['author']) && !empty($_GET['author'])):
        $id = htmlspecialchars($_GET['author']);
    else:
        header('Location: 404.php');
    endif;
    $pdo = new PDO('mysql:host=localhost; dbname=exercice; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $queryInfo = $pdo->prepare("SELECT books.titre, books.img_src, books.resume, books.date_edition, authors.nom, genres.name FROM books INNER JOIN authors ON books.author_id = authors.id INNER JOIN composition ON books.id = composition.livre_id INNER JOIN genres ON composition.genre_id = genres.id WHERE authors.id = :id");
    $queryInfo->bindParam(':id', $id, PDO::PARAM_INT);
    $queryInfo->execute();
    $row = $queryInfo->fetchAll(PDO::FETCH_ASSOC);
    if (!$row) {
        header ('Location: 404.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Auteurs</title>
</head>
<body>
    
    <?php 
        include 'navbar.php';
    ?>

    <div class="container">
        <?php foreach($row as $value): ?>
            <div class="row rounded text-center mb-5 align-middle" style="background-color:rgba(0, 0, 0, 0.616); color:white;">
                <div class="col-md-4 p-3 align-middle">
                    <div class="col p-3"> <img src="img/<?php echo  $value["img_src"] ?>" class="img-fluid" alt="Responsive image"></div>
                    <div class="col p-3"><strong><u><?php echo  $value["titre"] ?></u></strong></div>
                </div>
                <div class="col-md-3 p-3 align-middle">
                    <div class="col p-3"><?php echo  $value["nom"] ?></div>
                    <div class="col p-3"><?php echo  $value["date_edition"] ?></div>
                    <div class="col p-3"><?php echo  $value["name"] ?></div>
                </div>
                <div class="col-md-5 p-3 align-middle">
                    <?php echo  $value["resume"] ?>  
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>