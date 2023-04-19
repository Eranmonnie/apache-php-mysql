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
  
    <?php foreach($result as $book) :?>
        
            <a href="#">
                <li><?= $book["name"] ?></li>
                <li><?= $book["author"] ?></li>
            </a>
        
    <?php endforeach; ?>
  
</body>
</html>