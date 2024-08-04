<?php
    $posts = array();
    $posts[] = array(
        'name' => 'Garfield',
        'message' => 'I hate mondays.',
        'image' => './images/garf.webp',
        'date' => '28/07/24'
    );
    $posts[] = array(
        'name' => 'John',
        'message' => 'Garfield is fat.',
        'image' => './images/john.png',
        'date' => '29/07/24'
    );
    $posts[] = array(
        'name' => 'Odie',
        'message' => '*pants*',
        'image' => './images/odie.avif',
        'date' => '30/07/24'
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task1</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="content">

        <h1>Social Media</h1>
        <?php foreach($posts as $post) { ?>
            <div class="post">
                <div class="post__user">
                    <h5><?=$post['name']?></h5>
                    <img src="<?=$post['image']?>" width="150" height="150" alt="garf">
                </div>
                <div class="post__content">
                    <?=$post['message']?> <br>
                    <?=$post['date']?>
                </div>
            </div>
            <?php }?>
        </div>
</body>
</html>