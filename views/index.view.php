<?php require "partial/navbar.view.php" ?>

<h1>Recomended books</h1>
  
    <?php foreach($result as $book) :?>
        
            <a href="#">
                <li><?= $book["name"] ?></li>
                <li><?= $book["author"] ?></li>
            </a>
        
    <?php endforeach; ?>
  
</body>
</html>