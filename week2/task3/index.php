<?php 
require './classes/postSeeder.php';
$posts = wad\PostSeeder::seed();


use wad\Post;
use wad\Comment;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task3</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="content">
        <h1>Social Media</h1>
        <?php foreach($posts as $post) { ?>
            <div class="post">
                <div class="post__user">
                    <h3><?=$post->getName()?></h3>
                    <img src="<?=$post->getImage()?>" width="150" height="150" alt="garf">
                </div>
                <div class="post__content">
                    <?=$post->getMessage()?> <br>
                    <?=$post->getDate()?>
                </div>
            </div>
            <div class="comments">
                <h4>Comments:</h4>
                <?php foreach($post->getComments() as $comment) {?>
                    <div class="post__comments">
                        <p><?=$comment->getUser()?>:</p>
                        <p class="comments__comment"><?=$comment->getComment()?></p>
                    </div>
                    <?php }?>
                </div>
            <?php }?>
        </div>
</body>
</html>