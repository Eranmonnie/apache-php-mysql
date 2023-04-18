<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            display: grid;
            place-items:center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <?php 
    $name = 'dark matter';
    $read = false;
    $message = 'you have not read dark matter';

    if($read){
        $message = 'you have read dark matter';

    }
    ?>

   
    <h1><?php echo $message; ?></h1>
   
  
</body>
</html>