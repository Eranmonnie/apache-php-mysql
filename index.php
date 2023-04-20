<?php

$uri = $_SERVER["REQUEST_URI"];

$uri = parse_url($uri)["path"];

if ($uri ==="/") {
    require "controllers/index.php";
}
else if ($uri === "/about"){
    require "controllers/about.php";
}
else if ($uri ==="/contact"){
    require "controllers/contact.php";
}