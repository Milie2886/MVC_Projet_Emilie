<?php

use UserRepository;

$ur = new UserRepository($pdo);
$statement = $ur->findall();
$users = $statement->fetchAll();

?>