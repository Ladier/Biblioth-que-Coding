<?php
    $pdo = new PDO('mysql:host=localhost; dbname=exercice; charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $queryGenres = $pdo->prepare('SELECT genres.name, genres.id FROM genres');
    $queryGenres->execute();
    if ($queryGenres) {
        $genre = $queryGenres->fetchAll(PDO::FETCH_ASSOC);
    }
    $queryAuthors = $pdo->prepare('SELECT authors.nom, authors.id FROM authors');
    $queryAuthors->execute();
    if ($queryAuthors) {
        $author = $queryAuthors->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="http://localhost/bibli/">Accueil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Genres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">  
            <?php foreach ($genre as $value) {
                echo "<a class='dropdown-item' ' href='http://localhost/bibli/genres.php?genre=".$value["id"]."' >" .$value["name"]. "</a>";
            } ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Auteurs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">  
            <?php foreach ($author as $value) {
                echo "<a class='dropdown-item' ' href='http://localhost/bibli/author.php?author=".$value["id"]."' >" .$value["nom"]. "</a>";
            } ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/bibli/books.php">Livres</a>
      </li>
    </ul>
  </div>
</nav>