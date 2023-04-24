<?php

$uri = $_SERVER["REQUEST_URI"];

$uri = parse_url($uri)["path"];

$routes =[
    "/" => "controllers/index.php",
    "/notes" => "controllers/notes.php",
];



function abort($code = '404'){
    http_response_code($code);
    require "views/{$code}.php";
    die();
};


function routset($uri, $routes){
if (array_key_exists($uri, $routes)){
    require $routes[$uri];
}
else{
    abort("404");
}
};


routset($uri, $routes);

//get all the routes probably through a function on each rout page that adds the routes to an array
//loop through each aass array 
//use the logic above 
