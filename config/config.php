<?php
/**
 * @author Thibaud BARDIN (https://github.com/Irvyne).
 * This code is under MIT licence (see https://github.com/Irvyne/license/blob/master/MIT.md)
 */

$dsn      = 'mysql:host=localhost;dbname=blog';
$user     = 'root';
$password = '';

try{
    $pdo = new PDO($dsn, $user, $password);
}catch (PDOException $e){
    //throw new PDOException('erreur de connexion');
    //var_dump($e);
    @mail('adress@adress.com', 'sujet', $e->getMessage());
    echo 'erreur de connexion de BDD';
    die;
}