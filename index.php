<?php

$uri = $_SERVER["REQUEST_URI"];

$uri = parse_url($uri)["path"];


$routes =[
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
];


if (array_key_exists($uri, $routes)){
    require $routes[$uri];
}
else{
    http_response_code(404);
    require "views/404.php";
}
 

//get all the routes probably through a function on each rout page that adds the routes to an array
//loop through each aass array 
//use the logic above 
