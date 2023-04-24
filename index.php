<?php

require "router.php";
require 'Database.php';

$config = require("config.php");

$db = new Database($config['database']);

$id = $_GET['id'];
$query ="select * from blogs where id = ?";
$result = $db->query($query, [$id])->fetchAll();
var_dump($result);
//get data from request


