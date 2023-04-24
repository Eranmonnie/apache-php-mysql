<?php

require "router.php";
require 'Database.php';

$config = require("config.php");

$db = new Database($config['database']);
<<<<<<< HEAD

$id = $_GET['id'];
$query ="select * from blogs where id = ?";
$result = $db->query($query, [$id])->fetchAll();
var_dump($result);
=======
//get data from request
>>>>>>> fe5a299c6d995fab66227dd8d09e29d0d6707c41


