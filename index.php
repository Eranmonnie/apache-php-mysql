<?php
require "router.php";

//connect to our db
//database class
class Database{

   public $connection;

    public function __construct(){
        $password = "eranmonnie";
        $username = "root";
        $dsn= 'mysql:host=localhost;port=3306;charset=utf8mb4;dbname=phpdb;';
        $this->connection = new PDO($dsn, $username, $password);
    }
    public function query($query){
        
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}


$db = new Database();
$posts = $db->query("select * from blogs")->fetch(PDO::FETCH_ASSOC);
var_dump($posts);

