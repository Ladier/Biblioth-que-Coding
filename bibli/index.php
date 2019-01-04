<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Bibliothèque coding</title>
</head>

<body>

    <?php include 'navbar.php';?>

    <header class="shadow-lg p-3 mb-5 rounded text-center">
        <strong><h1>Bienvenue dans la bibliothèque Coding !</h1></strong>
        <p>Notre bibliothèque vous propose un large choix de livres classés par genre. Il y en aura forcément un pour vous plaire ! </p>
        <img src="img/biblio.jpg" class="img-fluid" alt="Responsive image">
    </header>

    <div class="container">
        <div class="row shadow-lg rounded text-center" style="background-color:lightgray; padding:2em; color:rgb(36, 13, 8); margin-bottom: 2em;">
            <div class="col-6">
                <div class="card rounded mx-auto d-block"" style="width: 18rem;">
                    <img class="card-img-top" src="img/not_found.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consequatur beatae eligendi natus aliquid dolor ex recusandae corporis officiis. Quis libero deserunt ut animi unde corrupti ad suscipit dignissimos cupiditate!</p>
            </div>
        </div>
        <div class="row shadow-lg rounded text-center" style="background-color:lightgray; padding:2em; color:rgb(36, 13, 8); margin-bottom: 2em;">
            <div class="col-6">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consequatur beatae eligendi natus aliquid dolor ex recusandae corporis officiis. Quis libero deserunt ut animi unde corrupti ad suscipit dignissimos cupiditate!</p>
            </div>
            <div class="col-6">
                <div class="card rounded mx-auto d-block" style="width: 18rem;">
                    <img class="card-img-top" src="img/not_found.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>