<?php

use UserRepository;

$ur = new UserRepository($pdo);
$statement = $ur->findall();
$users = $statement->fetchAll();

/*ici faire la logique d'insertion de l'utilisateur dans la base de données user
Renvoyer l'utilisateur sur la page de connection*/
?>