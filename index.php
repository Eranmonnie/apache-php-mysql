<?php

require "router.php";
require 'Database.php';

$config = require("config.php");

$db = new Database($config['database']);
//get data from request
$id = $_GET['id'];
$query ="select * from blogs where id = ?";

$posts = $db->query($query, [$id])->fetch();
var_dump($posts);

