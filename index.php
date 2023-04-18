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
            "Do androide dream of electric sheep",
            "Hail mary",
            "the langlioids"
        ]
    ?>

   
   <ul>

    <?php foreach ($books as $book) : ?>
    <li> <?= $book ?> </li>

    <?php endforeach; ?>
   </ul>
  
</body>
</html>