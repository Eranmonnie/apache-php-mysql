<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $heading ?></title>
    <style>
        body{  
            margin: 0;
            font-family: sans-serif;
        }

        .navstyle{
            display:flex;
            justify-content: center;
            gap: 5em;
            list-style: none;
        }
        a{
            text-decoration : none;
        }

    </style>
</head>
<body>

<nav>
        <ul class="navstyle">
            <li><a href="/">Home</a></li>
            <li><a href="/about">Notes</a></li>
        </ul>
    </nav>