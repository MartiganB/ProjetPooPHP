<?php
/**
* Retourne une connexion à la base de données
*
*/
function getPdo() {
$pdo = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', '', [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
return $pdo;
}