<?php

require "router.php";
require 'Database.php';

$config = require("config.php");

$db = new Database($config);
$posts = $db->query("select * from blogs")->fetch(PDO::FETCH_ASSOC);
var_dump($posts);

