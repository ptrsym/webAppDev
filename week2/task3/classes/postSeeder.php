<?php 
namespace wad;
use wad\Post;
require 'post.php';

    // seeder class for post test data
    class PostSeeder {
        public static function seed(){
            $post1 = new Post('Garfield', 'I hate Mondays.','./images/garf.webp', '28/07/24');
            $post2 = new Post('Jon', 'garf fat.','./images/john.png', '29/07/24');
            $post3 = new Post('Odie', '*pants*','./images/odie.avif', '30/07/24');
            $post1->addComment(new Comment('erol', 'hu haw'));
            $post2->addComment(new Comment('pete', 'garf fat'));
            $posts = array($post1, $post2, $post3);
            return $posts;
        }
    }
?>