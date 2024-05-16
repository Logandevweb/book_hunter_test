<?php
//connexion 

try {
    $connexion = new PDO('mysql:host=' . DB_HOST . ';dname=' . DB_NAME, DB_USER, DB_PASSWORD);
} catch (PDOException $e){
    echo $e;
}