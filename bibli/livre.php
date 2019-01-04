<?php

// Permet de récuperer en fonction de son id

if(isset($_GET['id']) && !empty($_GET['id'])):
    $id = htmlspecialchars($_GET['id']);
else:
    header('Location: 404.php');
endif;

// Connection avec ma BDD avec les erreurs !
$pdo = new PDO('mysql:host=localhost; dbname=exercice; charset=utf8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Requete prepare

$query = $pdo->prepare('SELECT books.id, books.titre, books.resume, books.img_src FROM books WHERE books.id = :id');
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute();

$data = $query->fetch(PDO::FETCH_ASSOC);

// vérification si on a bien un livre

if($data){
    var_dump($data);
} else {
    echo "pas de livre !";
}

include 'navbar.php';

var_dump($id);
