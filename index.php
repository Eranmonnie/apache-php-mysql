<?php

require "router.php";
require 'Database.php';


$db = new Database();
$posts = $db->query("select * from blogs")->fetch(PDO::FETCH_ASSOC);
var_dump($posts);

