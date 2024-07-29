<?php 
require './classes/post.php';

use wad\Post;
use wad\Comment;



$post1 = new Post('Garfield', 'I hate Mondays.','./images/garf.webp', '28/07/24');
$post2 = new Post('Jon', 'garf fat.','./images/john.png', '29/07/24');
$post3 = new Post('Odie', '*pants*','./images/odie.avif', '30/07/24');

$post1->addComment(new Comment('erol', 'hu haw'));
$post2->addComment(new Comment('pete', 'garf fat'));

$posts = array($post1, $post2, $post3)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
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