<?php 
$books = [

    [

    "name"  => "Do androide dream of electric sheep",
    "author" => "hope vandine",
    "relese year" => "2004",
    "url" => "http//:example.com"
    
],

[
    
    "name" => "Hail mary",
    "author" => "thomas cruch",
    "relese year" => "2009",
    "url" => "http//:example.com"
],

[
    
    "name" => "charlie simson",
    "author" => "andie strongheart",
    "relese year" => "20011",
    "url" => "http//:example.com"
],
    
];

//you can use phps array_filter fuunction it also worka like the filter function we created
function filter  ($items, $function){

    $filteredItems = [];

    foreach ($items as $item){   
        if($function($item)){
            
            $filteredItems[] = $item;    
        }                
    }
    return $filteredItems; 

    }
    

$result = filter($books, function($item){
    return $item['name'] === 'charlie simson';
});

require "views/index.view.php";
