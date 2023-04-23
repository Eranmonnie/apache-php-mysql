<?php
require "router.php";

//connect to our db
$password = "eranmonnie";
$username = "root";
$dsn= 'mysql:host=localhost;port=3306;charset=utf8mb4;dbname=phpdb;';

$pdo = new PDO($dsn, $username, $password);

$statement = $pdo->prepare("select * from blogs");
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($posts);

