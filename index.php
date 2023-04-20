<?php
require "router.php";

//connect to our db

class person {
 
    public $name; 
    public $age; 

    function braethe(){
        echo"breathing, {$this->name}";
    }
};

$feranmi = new person();

$feranmi->name = "Ajala feranmi ";
$feranmi->age = 19;


($feranmi->braethe());
 