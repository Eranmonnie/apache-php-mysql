<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{  
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

<h1>Recomended books</h1>
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

        
       function filter  ($items, $function){

            $filteredItems = [];

            foreach ($items as $item){   
                if($function($item)){
                    
                    $filteredItems[] = $item;    
                }                
            }
            return $filteredItems; 

            }
            //you can use phps array_filter fuunction it also worka like the filter function we created

        $result = filter($books, function($item){
            return $item['name'] === 'charlie simson';
        });
    ?>
  
    <?php foreach($result as $book) :?>
        
            <a href="#">
                <li><?= $book["name"] ?></li>
                <li><?= $book["author"] ?></li>
            </a>
        
    <?php endforeach; ?>


  
</body>
</html>